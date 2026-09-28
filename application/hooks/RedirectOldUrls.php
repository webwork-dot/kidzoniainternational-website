<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedirectOldUrls {
    public function redirect_index_php() {
        $uri = $_SERVER['REQUEST_URI'];

        // Match URLs starting with index.php?/ or ?/
        if (preg_match('#^/(index\.php\?/|\?/)(.*)#', $uri, $matches)) {
            $clean_path = ltrim($matches[2], '/'); // remove leading slash if exists

            // Redirect permanently
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: https://www.kidzoniainternational.in/" . $clean_path);
            exit;
        }
    }
}
