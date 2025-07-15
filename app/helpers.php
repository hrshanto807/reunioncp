<?php

if (!function_exists('englishNumber')) {
    function englishNumber($number)
    {
        $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($bn, $en, $number);
    }
}

if (!function_exists('banglaNumber')) {
    function banglaNumber($number)
    {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return str_replace($en, $bn, $number);
    }
}
