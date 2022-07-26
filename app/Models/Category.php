<?php

namespace App\Models;

use App\Support\Traits\Translateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; 

    use HasFactory;
    use Translateable;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    protected static function booted()
    {
        include(base_path() . '\App\Support\CreateTranslationsFunction.php');
    }
}
