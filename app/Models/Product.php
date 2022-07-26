<?php

namespace App\Models;

use App\Support\Traits\Translateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Translateable;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    protected static function booted()
    {
        include(base_path() . '\App\Support\CreateTranslationsFunction.php');
    }
}
