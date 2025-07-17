<?php

use Illuminate\Support\Facades\Crypt;


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

if (! function_exists('tailwind_color_class')) {
    /**
     * Map short color names to Tailwind CSS color classes
     *
     * @param string $colorKey
     * @param string $type 'text', 'bg', 'from', 'to'
     * @param string $shade Optional color shade, default 600
     * @return string
     */
    function tailwind_color_class(string $colorKey, string $type = 'text', string $shade = '600'): string
    {
        $colors = [
            'red' => 'red',
            'blue' => 'blue',
            'green' => 'green',
            'pink' => 'pink',
            'cyan' => 'cyan',
            'emerald' => 'emerald',
            'purple' => 'purple',
            // Add more colors if you use them
        ];

        $baseColor = $colors[$colorKey] ?? 'blue';

        return "{$type}-{$baseColor}-{$shade}";
    }
}

if (!function_exists('encode_id')) {
    function encode_id($id)
    {
        return Crypt::encryptString($id);
    }
    function decode_id($encryptedId)
    {
        try {
            return Crypt::decryptString($encryptedId);
        } catch (\Exception $e) {
            abort(404); // Invalid or tampered encrypted ID
        }
    }
}
