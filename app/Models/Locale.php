<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    public static function getDefaultValue()
    {
        return self::where('default', true)->first()->value;
    }
}