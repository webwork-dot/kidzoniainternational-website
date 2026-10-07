<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include image resize library
include APPPATH . "third_party/image-resize/ImageResize.php";
include APPPATH . "third_party/image-resize/ImageResizeException.php";

//include image resize library
require_once APPPATH . "third_party/intervention-image/vendor/autoload.php";

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use \Gumlet\ImageResize;
use \Gumlet\ImageResizeException;

class Upload_model extends CI_Model
{
	/** AVIF encode quality (0–100). */
	private $avif_quality = 50;

	/** Image extensions eligible for AVIF conversion. */
	private $convertible_exts = array('jpg', 'jpeg', 'png', 'webp', 'gif', 'bmp');

	/** Non-image extensions that must never be converted (e.g. banner videos). */
	private $skip_exts = array('mp4', 'webm', 'mov', 'avi', 'mkv', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'zip', 'rar');

	//upload temp image
	public function upload_temp_image($file_name)
	{
		if (isset($_FILES[$file_name])) {
			if (empty($_FILES[$file_name]['name'])) {
				return null;
			}
		}
		$config['upload_path'] = './uploads/temp/';
		$config['allowed_types'] = '*';
		$config['file_name'] = 'img_temp_' . generate_unique_id();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($file_name)) {
			$data = array('upload_data' => $this->upload->data());
			if (isset($data['upload_data']['full_path'])) {
				return $data['upload_data']['full_path'];
			}
			return null;
		} else {
			return null;
		}
	}
	
	public function product_default_image_upload($path, $folder){
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->resizeToHeight(600);
			$ext=getExtension($path);
			$new_name = generate_unique_id() . '.'.$ext;
			$new_path = upload_url(). $folder . '/' . $new_name;
			$image->save($new_path);
			$final_path =str_replace(upload_url(),"",$new_path);		
			return $final_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	public function image_upload_outside($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 1000, 667);
	}

	public function image_upload_inside($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 1200, 800);
	}

	public function image_upload_achievements($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 450, 262);
	}

	public function image_upload_print_media($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 400, 565);
	}

	public function image_upload_parents_testimonial($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 400, 225);
	}

	public function image_upload_branches($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 400, 565);
	}

	public function video_upload($file_name){  
	  if (isset($_FILES[$file_name])) {
			if (empty($_FILES[$file_name]['name'])) {
				return null;
			}
		}
		
		date_default_timezone_set('Asia/Calcutta'); 
        $year  = date('Y');
        $month = date('m');
        $dates = date('d');
        $config['upload_path']   = '../upload/gallery/' . $year . '/' . $month . '/' . $dates . '/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($file_name)) {
           $idata = $this->upload->data();                
           $url =  'upload/gallery/' . $year . '/' . $month . '/' . $dates . '/' . $idata["file_name"];
		   return $url;
        } else {				
            return NULL;
        }
	}
	
	public function product_direct_upload($path, $folder){
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->resizeToHeight(600);
			$ext=getExtension($path);
			$new_name = generate_unique_id() . '.'.$ext;
			$new_path = upload_url(). $folder . $new_name;
	
			$image->save($new_path);
			$final_path =str_replace(upload_url(),"",$new_path);		
			return $final_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	public function sign_image_upload($path,$file)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->crop(200, 100, true);
			$new_path = 'uploads/sign/' . $file . '.jpg';
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			//add watermark
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	
	public function image_thumbnail_upload($path, $folder,$file_name)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->resizeToHeight(600);
			$new_path = 'uploads/' . $folder . '/' . $file_name;
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}
	
	public function image_user_upload($path, $folder,$file_name)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->resizeToHeight(300);
			$new_path = 'uploads/' . $folder . '/' . $file_name;
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}

	public function check_file_mime_type($file_name, $allowed_types)
	{
		if (!isset($_FILES[$file_name])) {
			return false;
		}
		if (empty($_FILES[$file_name]['name'])) {
			return false;
		}
		$ext = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);
		if (in_array($ext, $allowed_types)) {
			return true;
		}
		return false;
	}	
	


	//product default image upload
	public function category_image_upload($path, $folder)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			$image->resizeToHeight(60);
			$new_name = generate_unique_id() . '.jpg';
			$new_path = $folder . $new_name;
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);	
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}
		//product default image upload
	public function image_upload($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, null, 800);
	}

	public function image_upload_packages($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, 1200, 800);
	}

	public function image_upload_blogs($path, $folder)
	{
		return $this->save_resized_avif($path, $folder, null, 800);
	}
	
	public function voice_upload($path, $folder)
	{
		try {
			$image = new ImageResize($path);
			$image->quality_jpg = 70;
			//$image->resizeToHeight(60);
			$new_name = generate_unique_id() . '.jpg';
			$new_path = $folder . $new_name;
			$image->save(FCPATH . $new_path, IMAGETYPE_JPEG);	
			return $new_path;
		} catch (ImageResizeException $e) {
			return null;
		}
	}
	

	public function delete_temp_voice($path)
	{
		if (file_exists($path)) {
			@unlink($path);
		}
	}
	
	//delete temp image
	public function delete_temp_image($path)
	{
		if (file_exists($path)) {
			@unlink($path);
		}
	}


	/**
	 * Whether the server can encode AVIF (GD imageavif preferred, else Imagick write).
	 */
	public function supports_avif()
	{
		if (function_exists('imageavif')) {
			return true;
		}
		return $this->imagick_can_write_avif();
	}

	private function imagick_can_write_avif()
	{
		if (!extension_loaded('imagick') || !class_exists('Imagick')) {
			return false;
		}
		try {
			$formats = Imagick::queryFormats('AVIF');
			return !empty($formats);
		} catch (Exception $e) {
			return false;
		}
	}

	/**
	 * Absolute path to site-root uploads (sibling of master-panel).
	 */
	public function uploads_root()
	{
		$root = dirname(rtrim(FCPATH, '/\\')) . DIRECTORY_SEPARATOR;
		return $root;
	}

	/**
	 * Resolve a DB-relative path (uploads/...) to an absolute filesystem path.
	 */
	public function resolve_upload_path($relative)
	{
		$relative = ltrim(str_replace(array('\\', '../'), array('/', ''), $relative), '/');
		return $this->uploads_root() . str_replace('/', DIRECTORY_SEPARATOR, $relative);
	}

	/**
	 * Make a writable absolute path from a relative folder + filename.
	 */
	private function absolute_dest_path($folder, $filename)
	{
		if (!is_dir($folder)) {
			@mkdir($folder, 0755, true);
		}
		$abs_dir = realpath($folder);
		if ($abs_dir === false) {
			// realpath fails if dir just created on some systems — resolve manually
			$abs_dir = $folder;
			if (strpos($folder, '..') === 0 || strpos($folder, '../') !== false) {
				$abs_dir = realpath(dirname($folder))
					? (realpath(dirname($folder)) . DIRECTORY_SEPARATOR . basename($folder))
					: (rtrim($this->uploads_root(), '/\\') . DIRECTORY_SEPARATOR . ltrim(str_replace('../', '', $folder), '/\\'));
			}
			if (!is_dir($abs_dir)) {
				@mkdir($abs_dir, 0755, true);
			}
			$resolved = realpath($abs_dir);
			if ($resolved !== false) {
				$abs_dir = $resolved;
			}
		}
		return rtrim($abs_dir, '/\\') . DIRECTORY_SEPARATOR . $filename;
	}

	/**
	 * Tables/columns that store CMS image paths for bulk conversion.
	 */
	public function get_image_sources()
	{
		return array(
			array('table' => 'banner', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'banner', 'column' => 'file', 'pk' => 'id'),
			array('table' => 'sliders', 'column' => 'file', 'pk' => 'id'),
			array('table' => 'print_media', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'achievements', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'parents_testimonials', 'column' => 'thumbnail', 'pk' => 'id'),
			array('table' => 'awards_and_recognitions', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'products', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'gallery_image', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'gallery_campus_photos', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'events', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'blogs_image', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'digital_news', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'blogs', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'branches', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'home_about', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'about_us', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'our_team', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'learning_space', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'learning_space', 'column' => 'heading', 'pk' => 'id'),
			array('table' => 'about_curriculum', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'curriculum_slider', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'programmes_content', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'programmes_icon', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'kidzonia_day', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'kidzonia_day', 'column' => 'image1', 'pk' => 'id'),
			array('table' => 'kidzonia_commits', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'ixplore', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'whizkids', 'column' => 'image', 'pk' => 'id'),
			array('table' => 'our_teachers', 'column' => 'image', 'pk' => 'id'),
		);
	}

	/**
	 * Count rows that still need AVIF conversion.
	 */
	public function count_convertible_images()
	{
		$total = 0;
		$by_table = array();
		foreach ($this->get_image_sources() as $src) {
			if (!$this->db->table_exists($src['table'])) {
				continue;
			}
			if (!$this->db->field_exists($src['column'], $src['table'])) {
				continue;
			}
			$col = $src['column'];
			$pk = $src['pk'];
			$this->db->select('`' . $pk . '`, `' . $col . '`', false);
			$this->db->from($src['table']);
			$this->db->where('`' . $col . '` IS NOT NULL AND `' . $col . "` != ''", null, false);
			$query = $this->db->get();
			if (!$query) {
				continue;
			}
			$rows = $query->result_array();
			$count = 0;
			foreach ($rows as $row) {
				$path = $row[$col];
				if (!$this->is_convertible_path($path)) {
					continue;
				}
				$abs = $this->resolve_upload_path($path);
				if (!is_file($abs)) {
					continue;
				}
				$count++;
			}
			if ($count > 0) {
				$by_table[$src['table'] . '.' . $col] = $count;
			}
			$total += $count;
		}
		return array('total' => $total, 'by_table' => $by_table);
	}

	/**
	 * Convert one batch of existing DB images to AVIF.
	 *
	 * @param int  $limit     Max rows to process this call
	 * @param bool $dry_run   If true, do not write files or update DB
	 * @param bool $delete_old Delete original after successful convert
	 */
	public function convert_existing_batch($limit = 20, $dry_run = true, $delete_old = true)
	{
		$converted = 0;
		$skipped = 0;
		$failed = array();
		$processed = 0;

		foreach ($this->get_image_sources() as $src) {
			if ($processed >= $limit) {
				break;
			}
			if (!$this->db->table_exists($src['table']) || !$this->db->field_exists($src['column'], $src['table'])) {
				continue;
			}

			$col = $src['column'];
			$pk = $src['pk'];
			$this->db->select('`' . $pk . '`, `' . $col . '`', false);
			$this->db->from($src['table']);
			$this->db->where('`' . $col . '` IS NOT NULL AND `' . $col . "` != ''", null, false);
			$this->db->order_by('`' . $pk . '`', 'ASC', false);
			$query = $this->db->get();
			if (!$query) {
				continue;
			}
			$rows = $query->result_array();

			foreach ($rows as $row) {
				if ($processed >= $limit) {
					break;
				}
				$path = $row[$col];
				if (!$this->is_convertible_path($path)) {
					continue;
				}

				$abs_old = $this->resolve_upload_path($path);
				if (!is_file($abs_old)) {
					$skipped++;
					continue;
				}

				$processed++;
				$new_rel = preg_replace('/\.(jpe?g|png|webp|gif|bmp)$/i', '.avif', $path);
				$abs_new = $this->resolve_upload_path($new_rel);

				if ($dry_run) {
					$converted++;
					continue;
				}

				$dir = dirname($abs_new);
				if (!is_dir($dir)) {
					@mkdir($dir, 0755, true);
				}

				$ok = $this->encode_file_to_avif($abs_old, $abs_new);
				if (!$ok || !is_file($abs_new) || filesize($abs_new) < 32) {
					if (is_file($abs_new)) {
						@unlink($abs_new);
					}
					$failed[] = array(
						'table' => $src['table'],
						'id' => $row[$pk],
						'path' => $path,
						'error' => 'Encode failed',
					);
					continue;
				}

				$this->db->where($pk, $row[$pk]);
				$this->db->update($src['table'], array($col => $new_rel));

				if ($delete_old && strcasecmp($abs_old, $abs_new) !== 0 && is_file($abs_old)) {
					@unlink($abs_old);
				}
				$converted++;
			}
		}

		$remaining = $this->count_convertible_images();

		return array(
			'converted' => $converted,
			'skipped' => $skipped,
			'failed' => $failed,
			'processed' => $processed,
			'remaining' => $remaining['total'],
			'dry_run' => $dry_run,
		);
	}

	public function is_convertible_path($path)
	{
		if (empty($path) || !is_string($path)) {
			return false;
		}
		// Only convert CMS uploads under uploads/
		if (stripos($path, 'uploads/') !== 0 && stripos($path, 'uploads\\') !== 0) {
			return false;
		}
		$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
		if ($ext === 'avif' || $ext === '') {
			return false;
		}
		if (in_array($ext, $this->skip_exts, true)) {
			return false;
		}
		return in_array($ext, $this->convertible_exts, true);
	}

	/**
	 * Resize source and save as AVIF under $folder. Falls back to JPEG if AVIF unavailable.
	 */
	private function save_resized_avif($path, $folder, $max_width = null, $max_height = null)
	{
		try {
			if (!is_dir($folder)) {
				@mkdir($folder, 0755, true);
			}

			$use_avif = $this->supports_avif();
			$ext = $use_avif ? 'avif' : 'jpg';
			$new_name = generate_unique_id() . '.' . $ext;
			$rel_path = $folder . $new_name;
			$abs_path = $this->absolute_dest_path($folder, $new_name);

			$img = Image::make($path)->orientate();
			if ($max_width !== null && $max_height !== null) {
				$img->resize($max_width, $max_height, function ($constraint) {
					$constraint->aspectRatio();
					$constraint->upsize();
				});
			} elseif ($max_height !== null) {
				$img->resize(null, $max_height, function ($constraint) {
					$constraint->aspectRatio();
					$constraint->upsize();
				});
			} elseif ($max_width !== null) {
				$img->resize($max_width, null, function ($constraint) {
					$constraint->aspectRatio();
					$constraint->upsize();
				});
			}

			if ($use_avif) {
				$ok = $this->encode_intervention_to_avif($img, $abs_path);
				if (!$ok || !is_file($abs_path) || filesize($abs_path) < 32) {
					if (is_file($abs_path)) {
						@unlink($abs_path);
					}
					// last-resort JPEG fallback
					$new_name = generate_unique_id() . '.jpg';
					$rel_path = $folder . $new_name;
					$abs_path = $this->absolute_dest_path($folder, $new_name);
					$img->save($abs_path, 70);
				}
			} else {
				$img->save($abs_path, 70);
			}

			return str_replace('../', '', $rel_path);
		} catch (Exception $e) {
			return null;
		}
	}

	/**
	 * Encode an Intervention image instance to AVIF on disk (absolute path).
	 */
	private function encode_intervention_to_avif($img, $dest_path)
	{
		$dest_path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $dest_path);
		$dir = dirname($dest_path);
		if (!is_dir($dir)) {
			@mkdir($dir, 0755, true);
		}

		// Prefer GD imageavif — more reliable for write than Imagick format claims
		if (function_exists('imageavif')) {
			$gd = $this->intervention_to_gd($img);
			if ($gd) {
				if (function_exists('imagepalettetotruecolor')) {
					@imagepalettetotruecolor($gd);
				}
				@imagealphablending($gd, true);
				@imagesavealpha($gd, true);
				$ok = @imageavif($gd, $dest_path, $this->avif_quality);
				imagedestroy($gd);
				if ($ok && is_file($dest_path) && filesize($dest_path) >= 32) {
					return true;
				}
				if (is_file($dest_path)) {
					@unlink($dest_path);
				}
			}
		}

		if ($this->imagick_can_write_avif()) {
			try {
				$blob = (string) $img->encode('png');
				$im = new Imagick();
				$im->readImageBlob($blob);
				$im->setImageFormat('avif');
				$im->setImageCompressionQuality($this->avif_quality);
				$im->writeImage($dest_path);
				$im->clear();
				$im->destroy();
				if (is_file($dest_path) && filesize($dest_path) >= 32) {
					return true;
				}
			} catch (Exception $e) {
				if (is_file($dest_path)) {
					@unlink($dest_path);
				}
			}
		}

		return false;
	}

	/**
	 * Get a GD resource from an Intervention image (any driver).
	 */
	private function intervention_to_gd($img)
	{
		$core = $img->getCore();
		$is_gd = is_resource($core)
			|| (is_object($core) && PHP_VERSION_ID >= 80000 && class_exists('GdImage', false) && $core instanceof \GdImage);
		if ($is_gd) {
			// Duplicate so we don't destroy Intervention's internal handle unexpectedly
			$w = imagesx($core);
			$h = imagesy($core);
			$copy = imagecreatetruecolor($w, $h);
			imagealphablending($copy, false);
			imagesavealpha($copy, true);
			$transparent = imagecolorallocatealpha($copy, 0, 0, 0, 127);
			imagefilledrectangle($copy, 0, 0, $w, $h, $transparent);
			imagealphablending($copy, true);
			imagecopy($copy, $core, 0, 0, 0, 0, $w, $h);
			return $copy;
		}

		$blob = (string) $img->encode('png');
		$gd = @imagecreatefromstring($blob);
		return $gd ? $gd : null;
	}

	/**
	 * Encode an existing file to AVIF (no forced resize — preserve dimensions).
	 */
	public function encode_file_to_avif($source_path, $dest_path)
	{
		if (!is_file($source_path)) {
			return false;
		}
		try {
			$img = Image::make($source_path)->orientate();
			return $this->encode_intervention_to_avif($img, $dest_path);
		} catch (Exception $e) {
			return false;
		}
	}

	/**
	 * Self-test AVIF write; returns details for the admin tool.
	 */
	public function avif_self_test()
	{
		$result = array(
			'function_imageavif' => function_exists('imageavif'),
			'imagick_avif' => $this->imagick_can_write_avif(),
			'supports_avif' => $this->supports_avif(),
			'write_ok' => false,
			'message' => '',
			'test_path' => '',
		);

		if (!$result['supports_avif']) {
			$result['message'] = 'No AVIF encoder available';
			return $result;
		}

		$tmp_dir = rtrim(FCPATH, '/\\') . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'temp';
		if (!is_dir($tmp_dir)) {
			@mkdir($tmp_dir, 0755, true);
		}
		$test_path = $tmp_dir . DIRECTORY_SEPARATOR . 'avif_self_test_' . time() . '.avif';
		$result['test_path'] = $test_path;

		try {
			$gd = imagecreatetruecolor(16, 16);
			$color = imagecolorallocate($gd, 20, 120, 200);
			imagefilledrectangle($gd, 0, 0, 15, 15, $color);
			$png_tmp = $tmp_dir . DIRECTORY_SEPARATOR . 'avif_self_test_' . time() . '.png';
			imagepng($gd, $png_tmp);
			imagedestroy($gd);

			$img = Image::make($png_tmp);
			$ok = $this->encode_intervention_to_avif($img, $test_path);
			@unlink($png_tmp);

			if ($ok && is_file($test_path) && filesize($test_path) >= 32) {
				$result['write_ok'] = true;
				$result['message'] = 'AVIF write succeeded (' . filesize($test_path) . ' bytes)';
			} else {
				$result['message'] = 'AVIF function exists but write failed';
			}
			if (is_file($test_path)) {
				@unlink($test_path);
			}
		} catch (Exception $e) {
			$result['message'] = 'Self-test error: ' . $e->getMessage();
		}

		return $result;
	}

}
