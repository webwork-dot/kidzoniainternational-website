<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Math CAPTCHA Helper
 *
 * Provides functions to generate and verify a simple math CAPTCHA.
 */

if (!function_exists('generate_math_captcha')) {
    /**
     * Generates a simple math addition question and stores the answer in session.
     *
     * @return string The math question (e.g., "5 + 3")
     */
    function generate_math_captcha() {
        $CI =& get_instance();
        
        // Generate two random numbers between 1 and 9
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        $sum = $num1 + $num2;
        
        // Store the correct answer in session
        $CI->session->set_userdata('captcha_answer', $sum);
        
        return "$num1 + $num2";
    }
}

if (!function_exists('verify_math_captcha')) {
    /**
     * Verifies the provided answer against the stored session value.
     *
     * @param mixed $answer The user-provided answer
     * @return bool TRUE if correct, FALSE otherwise
     */
    function verify_math_captcha($answer) {
        $CI =& get_instance();
        
        $session_answer = $CI->session->userdata('captcha_answer');
        
        // Compare values (cast to int to be safe)
        if ($session_answer !== NULL && (int)$answer === (int)$session_answer) {
            // Success: clear the answer from session to prevent reuse
            $CI->session->unset_userdata('captcha_answer');
            return TRUE;
        }
        
        return FALSE;
    }
}
