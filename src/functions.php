<?php

use Phico\Validation\Validator;


if (!function_exists('validator')) {
    function validator(): Validator
    {
        static $validator;

        $validator = ($validator) ? $validator : new Validator;

        return $validator;
    }
}
