<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    public $timestamps = false; 
    protected $guarded = ['id'];
    
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
