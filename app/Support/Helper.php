<?php

/**
 * Custom Helper class
 * @author Bobur Nuridinov <bobnuridinov@gmail.com> 
 */

namespace App\Support;

use App\Models\Locale;

class Helper {

    public static function generateRoute($name)
    {
        return app()->getLocale() == Locale::where('main', true)->first()->value ? route('default.' . $name) : route($name);
    }

}