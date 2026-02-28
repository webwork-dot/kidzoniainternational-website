<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedirectOldUrls {
    public function redirect_index_php() {
        $host = $_SERVER['HTTP_HOST'] ?? '';
        $uri = $_SERVER['REQUEST_URI'] ?? '';
        $is_localhost = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);
        
        // Redirect www.localhost to localhost (force HTTP for localhost)
        if ($is_localhost && strpos($host, 'www.') === 0) {
            $clean_host = str_replace('www.', '', $host);
            $protocol = 'http'; // Force HTTP for localhost
            $new_url = $protocol . '://' . $clean_host . $uri;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $new_url);
            exit;
        }
        
        // Force HTTP for localhost (not HTTPS)
        if ($is_localhost && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $protocol = 'http';
            $new_url = $protocol . '://' . $host . $uri;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $new_url);
            exit;
        }

        // Match URLs starting with index.php?/ or ?/ (production only)
        if (!$is_localhost && preg_match('#^/(index\.php\?/|\?/)(.*)#', $uri, $matches)) {
            $clean_path = ltrim($matches[2], '/'); // remove leading slash if exists

            // Redirect permanently
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: https://www.kidzoniainternational.in/" . $clean_path);
            exit;
        }
    }
}
