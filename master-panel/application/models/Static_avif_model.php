<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Scan / convert static frontend images (assets/, img/) to AVIF
 * and quarantine unused rasters.
 */
class Static_avif_model extends CI_Model
{
	private $scan_dirs = array('assets', 'img');
	private $raster_exts = array('jpg', 'jpeg', 'png', 'webp', 'gif', 'bmp');
	private $convert_exts = array('jpg', 'jpeg', 'png', 'webp', 'bmp'); // skip gif (often animated)
	private $skip_dir_names = array('_unused_static', 'node_modules', 'vendor', '.git');

	public function site_root()
	{
		return rtrim(dirname(rtrim(FCPATH, '/\\')), '/\\') . DIRECTORY_SEPARATOR;
	}

	/**
	 * Full inventory + used/unused classification.
	 */
	public function get_status($sample_limit = 30)
	{
		$files = $this->scan_static_files();
		$refs = $this->collect_references();

		$used_pending = array();
		$used_avif = array();
		$unused = array();
		$skipped_gif = array();

		foreach ($files as $rel => $meta) {
			$ext = $meta['ext'];
			$is_used = $this->is_path_referenced($rel, $refs);

			if ($ext === 'avif') {
				continue;
			}

			$avif_rel = preg_replace('/\.[^.]+$/', '.avif', $rel);
			$has_avif = isset($files[$avif_rel]) || is_file($this->abs($avif_rel));

			if ($ext === 'gif') {
				if ($is_used) {
					$skipped_gif[] = $rel;
				} elseif (!$has_avif) {
					$unused[] = $rel;
				}
				continue;
			}

			if (!in_array($ext, $this->convert_exts, true)) {
				continue;
			}

			if ($is_used) {
				if ($has_avif) {
					$used_avif[] = $rel;
				} else {
					$used_pending[] = $rel;
				}
			} else {
				$unused[] = $rel;
			}
		}

		sort($used_pending);
		sort($used_avif);
		sort($unused);

		return array(
			'total_rasters' => count($files),
			'used_pending' => count($used_pending),
			'used_has_avif' => count($used_avif),
			'unused' => count($unused),
			'skipped_gif_used' => count($skipped_gif),
			'refs_found' => count($refs['paths']),
			'sample_used_pending' => array_slice($used_pending, 0, $sample_limit),
			'sample_unused' => array_slice($unused, 0, $sample_limit),
			'used_pending_list' => $used_pending,
			'unused_list' => $unused,
		);
	}

	/**
	 * Convert a batch of used static images to AVIF and rewrite references.
	 */
	public function convert_used_batch($limit = 15, $dry_run = true, $delete_old = false, $update_refs = true)
	{
		$this->load->model('upload_model');
		$status = $this->get_status(0);
		$list = $status['used_pending_list'];
		$batch = array_slice($list, 0, max(1, (int) $limit));

		$converted = 0;
		$failed = array();
		$updated_files = array();

		foreach ($batch as $rel) {
			$abs = $this->abs($rel);
			if (!is_file($abs)) {
				$failed[] = array('path' => $rel, 'error' => 'File not found');
				continue;
			}

			$avif_rel = preg_replace('/\.[^.]+$/', '.avif', $rel);
			$avif_abs = $this->abs($avif_rel);

			if ($dry_run) {
				$converted++;
				continue;
			}

			$dir = dirname($avif_abs);
			if (!is_dir($dir)) {
				@mkdir($dir, 0755, true);
			}

			$ok = $this->upload_model->encode_file_to_avif($abs, $avif_abs);
			if (!$ok || !is_file($avif_abs) || filesize($avif_abs) < 32) {
				if (is_file($avif_abs)) {
					@unlink($avif_abs);
				}
				$failed[] = array('path' => $rel, 'error' => 'Encode failed');
				continue;
			}

			if ($update_refs) {
				$files_touched = $this->rewrite_references($rel, $avif_rel);
				$db_touched = $this->rewrite_db_references($rel, $avif_rel);
				if ($files_touched || $db_touched) {
					$updated_files[] = $rel;
				}
			}

			if ($delete_old && is_file($abs)) {
				@unlink($abs);
			}

			$converted++;
		}

		$after = $this->get_status(0);

		return array(
			'converted' => $converted,
			'failed' => $failed,
			'processed' => count($batch),
			'remaining' => $after['used_pending'],
			'unused_remaining' => $after['unused'],
			'refs_updated_for' => $updated_files,
			'dry_run' => $dry_run,
		);
	}

	/**
	 * Move unused static rasters into assets/_unused_static/{date}/...
	 */
	public function quarantine_unused_batch($limit = 30, $dry_run = true)
	{
		$status = $this->get_status(0);
		$list = $status['unused_list'];
		$batch = array_slice($list, 0, max(1, (int) $limit));
		$stamp = date('Ymd');
		$moved = 0;
		$failed = array();

		foreach ($batch as $rel) {
			$abs = $this->abs($rel);
			if (!is_file($abs)) {
				$failed[] = array('path' => $rel, 'error' => 'File not found');
				continue;
			}

			// Never quarantine something that suddenly appears referenced
			$refs = $this->collect_references();
			if ($this->is_path_referenced($rel, $refs)) {
				continue;
			}

			$dest_rel = 'assets/_unused_static/' . $stamp . '/' . $rel;
			$dest_abs = $this->abs($dest_rel);

			if ($dry_run) {
				$moved++;
				continue;
			}

			$dest_dir = dirname($dest_abs);
			if (!is_dir($dest_dir)) {
				@mkdir($dest_dir, 0755, true);
			}

			if (@rename($abs, $dest_abs)) {
				$moved++;
			} else {
				// cross-device fallback
				if (@copy($abs, $dest_abs)) {
					@unlink($abs);
					$moved++;
				} else {
					$failed[] = array('path' => $rel, 'error' => 'Move failed');
				}
			}
		}

		$after = $this->get_status(0);

		return array(
			'moved' => $moved,
			'failed' => $failed,
			'processed' => count($batch),
			'remaining' => $after['unused'],
			'quarantine_prefix' => 'assets/_unused_static/' . $stamp . '/',
			'dry_run' => $dry_run,
		);
	}

	/**
	 * Permanently delete files already under assets/_unused_static/ (optional cleanup).
	 */
	public function purge_quarantine($dry_run = true, $limit = 100)
	{
		$root = $this->abs('assets/_unused_static');
		if (!is_dir($root)) {
			return array('deleted' => 0, 'remaining' => 0, 'dry_run' => $dry_run);
		}

		$files = array();
		$iterator = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
		);
		foreach ($iterator as $file) {
			if ($file->isFile()) {
				$files[] = $file->getPathname();
			}
		}

		$batch = array_slice($files, 0, max(1, (int) $limit));
		$deleted = 0;
		foreach ($batch as $path) {
			if ($dry_run) {
				$deleted++;
				continue;
			}
			if (@unlink($path)) {
				$deleted++;
			}
		}

		return array(
			'deleted' => $deleted,
			'remaining' => max(0, count($files) - ($dry_run ? 0 : $deleted)),
			'dry_run' => $dry_run,
		);
	}

	// -------------------------------------------------------------------------
	// Internals
	// -------------------------------------------------------------------------

	private function abs($relative)
	{
		$relative = ltrim(str_replace('\\', '/', $relative), '/');
		return $this->site_root() . str_replace('/', DIRECTORY_SEPARATOR, $relative);
	}

	private function to_rel($absolute)
	{
		$root = str_replace('\\', '/', $this->site_root());
		$abs = str_replace('\\', '/', $absolute);
		if (stripos($abs, $root) === 0) {
			return ltrim(substr($abs, strlen($root)), '/');
		}
		return ltrim($abs, '/');
	}

	/**
	 * @return array rel_path => meta
	 */
	private function scan_static_files()
	{
		$out = array();
		foreach ($this->scan_dirs as $dir) {
			$abs = $this->abs($dir);
			if (!is_dir($abs)) {
				continue;
			}
			$iterator = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($abs, FilesystemIterator::SKIP_DOTS)
			);
			foreach ($iterator as $file) {
				if (!$file->isFile()) {
					continue;
				}
				$path = str_replace('\\', '/', $file->getPathname());
				$rel = $this->to_rel($path);
				$parts = explode('/', $rel);
				$skip = false;
				foreach ($parts as $part) {
					if (in_array($part, $this->skip_dir_names, true) || strpos($part, '_unused') === 0) {
						$skip = true;
						break;
					}
				}
				if ($skip) {
					continue;
				}

				$ext = strtolower(pathinfo($rel, PATHINFO_EXTENSION));
				if ($ext === 'avif' || in_array($ext, $this->raster_exts, true)) {
					$out[$rel] = array(
						'ext' => $ext,
						'size' => $file->getSize(),
					);
				}
			}
		}
		return $out;
	}

	/**
	 * Collect referenced image-like paths from code + DB.
	 */
	private function collect_references()
	{
		$paths = array();
		$basenames = array();

		$search_roots = array(
			$this->abs('application/views'),
			$this->abs('assets/css'),
			$this->abs('assets/admission-new-ui'),
			$this->abs('assets/js'),
		);

		$code_exts = array('php', 'css', 'js', 'html', 'htm');
		$pattern = '/(?:assets|img)\/[a-zA-Z0-9_\-\.\/]+\.(?:jpe?g|png|webp|gif|bmp|avif)/i';

		foreach ($search_roots as $root) {
			if (!is_dir($root)) {
				continue;
			}
			$iterator = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
			);
			foreach ($iterator as $file) {
				if (!$file->isFile()) {
					continue;
				}
				$ext = strtolower($file->getExtension());
				if (!in_array($ext, $code_exts, true)) {
					continue;
				}
				// Skip huge minified vendor dumps if any
				if ($file->getSize() > 5 * 1024 * 1024) {
					continue;
				}
				$content = @file_get_contents($file->getPathname());
				if ($content === false || $content === '') {
					continue;
				}
				if (preg_match_all($pattern, $content, $m)) {
					foreach ($m[0] as $p) {
						$norm = $this->normalize_ref($p);
						$paths[$norm] = true;
						$basenames[strtolower(basename($norm))] = true;
					}
				}
				// CSS relative urls like ../images/foo.jpg from assets/css or admission-new-ui
				if ($ext === 'css' && preg_match_all('/url\(\s*[\'"]?([^\'")]+)[\'"]?\s*\)/i', $content, $um)) {
					$css_dir = str_replace('\\', '/', dirname($file->getPathname()));
					foreach ($um[1] as $u) {
						$u = trim($u);
						if ($u === '' || strpos($u, 'data:') === 0 || strpos($u, 'http') === 0) {
							continue;
						}
						$resolved = $this->resolve_css_url($css_dir, $u);
						if ($resolved) {
							$paths[$resolved] = true;
							$basenames[strtolower(basename($resolved))] = true;
						}
					}
				}
			}
		}

		// DB paths under assets/ or img/
		$this->load->model('upload_model');
		foreach ($this->upload_model->get_image_sources() as $src) {
			if (!$this->db->table_exists($src['table']) || !$this->db->field_exists($src['column'], $src['table'])) {
				continue;
			}
			$col = $src['column'];
			$this->db->select($col);
			$this->db->from($src['table']);
			$this->db->group_start();
			$this->db->like($col, 'assets/', 'after');
			$this->db->or_like($col, 'img/', 'after');
			$this->db->group_end();
			$rows = $this->db->get()->result_array();
			foreach ($rows as $row) {
				$p = $this->normalize_ref($row[$col]);
				if ($p !== '') {
					$paths[$p] = true;
					$basenames[strtolower(basename($p))] = true;
				}
			}
		}

		return array(
			'paths' => $paths,
			'basenames' => $basenames,
		);
	}

	private function normalize_ref($path)
	{
		$path = str_replace('\\', '/', trim($path));
		$path = preg_replace('#^https?://[^/]+/#i', '', $path);
		$path = ltrim($path, '/');
		// strip query/hash
		$path = preg_replace('/[?#].*$/', '', $path);
		return $path;
	}

	private function resolve_css_url($css_dir_abs, $url)
	{
		$url = str_replace('\\', '/', $url);
		$url = preg_replace('/[?#].*$/', '', $url);
		if (strpos($url, 'assets/') === 0 || strpos($url, 'img/') === 0) {
			return $this->normalize_ref($url);
		}
		// Resolve relative to CSS file location under site root
		$parts = explode('/', rtrim($css_dir_abs, '/'));
		$segs = explode('/', $url);
		foreach ($segs as $seg) {
			if ($seg === '' || $seg === '.') {
				continue;
			}
			if ($seg === '..') {
				array_pop($parts);
			} else {
				$parts[] = $seg;
			}
		}
		$abs = implode('/', $parts);
		$rel = $this->to_rel($abs);
		$ext = strtolower(pathinfo($rel, PATHINFO_EXTENSION));
		if (in_array($ext, array_merge($this->raster_exts, array('avif')), true)) {
			if (strpos($rel, 'assets/') === 0 || strpos($rel, 'img/') === 0) {
				return $rel;
			}
		}
		return null;
	}

	private function is_path_referenced($rel, $refs)
	{
		$rel = $this->normalize_ref($rel);
		if (isset($refs['paths'][$rel])) {
			return true;
		}
		// Also treat as used if same path with different extension is referenced (already converted sibling)
		$base = preg_replace('/\.[^.]+$/', '', $rel);
		foreach ($refs['paths'] as $p => $_) {
			$pbase = preg_replace('/\.[^.]+$/', '', $p);
			if (strcasecmp($pbase, $base) === 0) {
				return true;
			}
		}
		// Basename fallback for theme leftovers is too aggressive — only for logo/chrome small set
		$bn = strtolower(basename($rel));
		$always = array('final-logo.png', 'final-logo.avif', 'favicon.png', 'favicon.ico', 'favicon.jpg');
		if (in_array($bn, $always, true)) {
			return true;
		}
		return false;
	}

	/**
	 * Replace old path with new path in view/CSS/JS source files.
	 */
	private function rewrite_references($old_rel, $new_rel)
	{
		$old_rel = $this->normalize_ref($old_rel);
		$new_rel = $this->normalize_ref($new_rel);
		$touched = false;

		$search_roots = array(
			$this->abs('application/views'),
			$this->abs('assets/css'),
			$this->abs('assets/admission-new-ui'),
			$this->abs('assets/js'),
		);
		$code_exts = array('php', 'css', 'js', 'html', 'htm');

		foreach ($search_roots as $root) {
			if (!is_dir($root)) {
				continue;
			}
			$iterator = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
			);
			foreach ($iterator as $file) {
				if (!$file->isFile()) {
					continue;
				}
				$ext = strtolower($file->getExtension());
				if (!in_array($ext, $code_exts, true)) {
					continue;
				}
				$path = $file->getPathname();
				$content = @file_get_contents($path);
				if ($content === false || $content === '') {
					continue;
				}
				if (strpos($content, $old_rel) === false) {
					// also try basename-only if unique enough and path appears with different prefix
					continue;
				}
				$new_content = str_replace($old_rel, $new_rel, $content);
				if ($new_content !== $content) {
					if (@file_put_contents($path, $new_content) !== false) {
						$touched = true;
					}
				}
			}
		}

		return $touched;
	}

	private function rewrite_db_references($old_rel, $new_rel)
	{
		$old_rel = $this->normalize_ref($old_rel);
		$new_rel = $this->normalize_ref($new_rel);
		$touched = false;

		$this->load->model('upload_model');
		foreach ($this->upload_model->get_image_sources() as $src) {
			if (!$this->db->table_exists($src['table']) || !$this->db->field_exists($src['column'], $src['table'])) {
				continue;
			}
			$col = $src['column'];
			$pk = $src['pk'];
			$this->db->select($pk . ',' . $col);
			$this->db->from($src['table']);
			$this->db->where($col, $old_rel);
			$rows = $this->db->get()->result_array();
			foreach ($rows as $row) {
				$this->db->where($pk, $row[$pk]);
				$this->db->update($src['table'], array($col => $new_rel));
				$touched = true;
			}
		}
		return $touched;
	}
}
