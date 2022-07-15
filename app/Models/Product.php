<?php

namespace App\Models;

use App\Support\Traits\Translateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Translateable;

    protected static function booted()
    {
        include('App/Support/CreateTranslationsFunction.php');
    }
}
