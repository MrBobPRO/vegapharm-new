<?php 

namespace App\Support\Traits;

use Illuminate\Support\Facades\App;

trait Translateable
{
    public function translations()
    {
        return $this->hasMany(static::class . 'Translation');
    }

    public function translation($column, $locale = null)
    {
        if ($locale == null) {
            $locale = App::getLocale();
        }
        
        return $this->translations()->where('locale', '=', $locale)->first()->{$column};
    }
}