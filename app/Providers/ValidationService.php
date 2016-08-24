<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationService
{

	public static $RANGE_INTEGER = ['min' => -2147483648, 'max' => 2147483647];

    public static $RANGE_INTEGER_UNSIGNED = ['min' => 0, 'max' => 2147483647];

    public static $RANGE_SMALLINTEGER_UNSIGNED = ['min' => 0, 'max' => 32767];

    public static function validateString($str, $max_length = null) {
        $clean = filter_var($str, FILTER_SANITIZE_STRING);
        return ($max_length === null || strlen($clean) <= $max_length) ? $clean : substr($clean, 0, $max_length);
    }

    public static function validateEmail($email, $max_length) {
        $clean = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(strlen($clean) <= $max_length) {
            return $clean;
        } else {
            return false;
        }
    }

    public static function validateInt($number, $min_value = null, $max_value = null) {
        $clean = filter_var($number, FILTER_VALIDATE_INT);
        return ($clean === false || ($min_value !== null && $clean < $min_value) || ($max_value !== null && $clean > $max_value)) ? false : $clean;
    }

    public static function validatePhoneNumber($number) {
        $number = str_replace('/', '', $number);
        $number = str_replace('-', '', $number);
        $number = str_replace(' ', '', $number);
        $pattern = '/^[0-9]+$/';
        if(preg_match($pattern, $number)) {
            return $number;
        } else {
            return false;
        }
    }
}