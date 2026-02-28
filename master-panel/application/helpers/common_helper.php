<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CodeIgniter
*
* An open source application development framework for PHP 5.1.6 or newer
*
* @package		CodeIgniter
* @author		ExpressionEngine Dev Team
* @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
* @license		http://codeigniter.com/user_guide/license.html
* @link		http://codeigniter.com
* @since		Version 1.0
* @filesource
*/

if ( ! function_exists('slugify'))
{
    function slugify($text) {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);
        //$text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        return 'n-a';
        return $text;
    }
}

if ( ! function_exists('trans'))
{
    function trans($phrase = '') {
        $key = strtolower(preg_replace('/\s+/', '_', $phrase));
        $langArray[$key] = ucwords(str_replace('_', ' ', $key));
        return $langArray[$key];
    }
}

if (!function_exists('main_url')) {
	function main_url()
	{
		return "https://kidzoniainternational.in/";
	}
}

if ( ! function_exists('ellipsis'))
{
    // Checks if a video is youtube, vimeo or any other
    function ellipsis($long_string, $max_character = 30) {
        $short_string = strlen($long_string) > $max_character ? substr($long_string, 0, $max_character)."..." : $long_string;
        return $short_string;
    }
}

if ( ! function_exists('get_phrase'))
{
    function get_phrase($phrase = '') {
        $key = strtolower(preg_replace('/\s+/', '_', $phrase));
        $langArray[$key] = ucwords(str_replace('_', ' ', $key));
        return $langArray[$key];
    }
}

if (!function_exists('currentUrl')) {
    function currentUrl( $trim_query_string = false ) {
        $pageURL = (isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] == 'on') ? "//" : "//";
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        if( ! $trim_query_string ) {
            return $pageURL;
        } else {
            $url = explode( '?', $pageURL );
            return $url[0];
        }
    }
}

if ( ! function_exists('getExtension'))
{
    function getExtension($str) {
         $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }
        
        $l   = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
}

//delete file from server
if (!function_exists('delete_file_from_server')) {
	function delete_file_from_server($path)
	{
		$full_path = FCPATH . $path;
		if (strlen($path) > 15 && file_exists($full_path)) {
			@unlink($full_path);
		}
	}
}

//generate slug
if (!function_exists('str_slug')) {
	function str_slug($text)
	{
	    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = strtolower($text);
        //$text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        return 'n-a';
        return $text;
	}
}

if (!function_exists('price_format_decimal')) {
	function price_format_decimal($price)
	{
		return number_format($price, 2, ".", "");
	}
}

if (!function_exists('page_number')) {
    function page_number($per_page)
    {
       $page = 1;
       $page     =$_GET['page'];
       if (isset($page) && $page != ""):
        $page = $page;
      else:
        $page = 1;
      endif;
      $start= $per_page*($page-1);
       return $start;
    }
}

//generate unique id
if (!function_exists('generate_unique_id')) {
	function generate_unique_id()
	{
		$id = uniqid("", TRUE);
		return str_replace(".", "-", $id);
	}
}

// ------------------------------------------------------------------------
/* End of file common_helper.php */
/* Location: ./system/helpers/common.php */