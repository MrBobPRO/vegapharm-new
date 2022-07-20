<?php

namespace App\Models;

use App\Support\Traits\Translateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public $timestamps = false; 

    use HasFactory;
    use Translateable;

    public static function getByKey($key)
    {
        return self::where('key', $key)->first();
    }

    protected static function booted()
    {
        include(base_path() . '\App\Support\CreateTranslationsFunction.php');
    }
}
