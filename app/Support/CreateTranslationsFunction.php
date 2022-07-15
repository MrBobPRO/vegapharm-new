<?php

use App\Models\Locale;

static::saved(function ($model) {
    $locales = Locale::all();

    foreach ($locales as $locale) 
    {
        $model->translations()->create(['locale' => $locale->value]);
    }
});