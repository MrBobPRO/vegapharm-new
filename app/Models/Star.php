<?php

namespace App\Models;

use App\Support\Traits\Translateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    public $timestamps = false; 
    protected $guarded = ['id'];

    use HasFactory;
    use Translateable;

    protected static function booted()
    {
        static::saved(function ($model) {
            $locales = Locale::all();

            foreach ($locales as $locale) 
            {
                $model->translations()->create(['locale' => $locale->value]);
            }
        });
    }
}
