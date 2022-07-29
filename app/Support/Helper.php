<?php

/**
 * Custom Helper class
 * 
 * @author Bobur Nuridinov <bobnuridinov@gmail.com> 
 */

namespace App\Support;

use Image;

class Helper {
    /**
     * Generate unique slug for given model
     *
     * @param string $string Generates slug from this string
     * @param string $model Full namespace of model
     * @param integer $ignoreId ignore slug of a model with a given id (used while updating model)
     * @return string
     */
    public static function generateUniqueSlug($string, $model, $ignoreId = null)
    {
        $cyrilic = [
            'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
            'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
            'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', ' ',
            'ӣ', 'ӯ', 'ҳ', 'қ', 'ҷ', 'ғ', 'Ғ', 'Ӣ', 'Ӯ', 'Ҳ', 'Қ', 'Ҷ',
            '/', '\\', '|', '!', '?', '«', '»', '“', '”', ':'
        ];

        $latin = [
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
            'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh', 'shb', 'a', 'i', 'y', 'e', 'yu', 'ya',
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
            'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh', 'shb', 'a', 'i', 'y', 'e', 'yu', 'ya', '-',
            'i', 'u', 'h', 'q', 'j', 'g', 'g', 'i', 'u', 'h', 'q', 'j',
            '', '', '', '', '', '', '', '', '', ''
        ];

        $transilation = str_replace($cyrilic, $latin, $string);
        $slug = strtolower($transilation);

        while ($model::where('slug', $slug)->where('id', '!=', $ignoreId)->first()) {
            $slug = $slug . '-1';
        }

        return $slug;
    }

    /**
     * remove tags, decode htmlspecialchars, trim and remove whitespaces
     * cut string if length given
     * and return clean text
     * 
     * used while sharing in socials/messangers
     * 
     * @param string $string
     * @param integer $length
     * @return string
     */
    public static function cleanText($string, $length = null)
    {
        $cleaned = preg_replace('#<[^>]+>#', ' ', $string); // remove tags
        $cleaned = htmlspecialchars_decode($cleaned); // decode htmlspecialchars
        $cleaned = preg_replace('!\s+!', ' ', $cleaned); // many spaces into one
        $cleaned = trim($cleaned); // remove whitespaces

        if ($length) {
            $cleaned = mb_strlen($cleaned) < $length ? $cleaned : mb_substr($cleaned, 0, ($length - 4)) . '...'; //cut length
        }

        return $cleaned;
    }

    /**
     * remove tags, decode htmlspecialchars, trim and remove whitespaces
     * cut string if length given
     * and return clean text
     * 
     * used while sharing in socials/messangers
     * 
     * @param string $string
     * @return string
     */
    public static function generateShareText($string)
    {
        $cleaned = preg_replace('#<[^>]+>#', ' ', $string); //remove tags
        $cleaned = htmlspecialchars_decode($cleaned); // decode htmlspecialchars
        $cleaned = preg_replace('!\s+!', ' ', $cleaned); //many spaces into one
        $cleaned = trim($cleaned); //remove whitespaces
        $cleaned = mb_strlen($cleaned) < 170 ? $cleaned : mb_substr($cleaned, 0, 166) . '...'; //cut length
        
        return $cleaned;
    }
}