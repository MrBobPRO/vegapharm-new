<?php

namespace Database\Seeders;

use App\Models\Locale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locTitles = ['Русский', 'English'];
        $locValues = ['ru', 'en'];
        
        for($i=0; $i<count($locTitles); $i++) {
            $locale = new Locale();
            $locale->title = $locTitles[$i];
            $locale->value = $locValues[$i];
            $locale->save();
        }
    }
}
