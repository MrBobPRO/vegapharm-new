<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opt = new Option();
        $opt->title = '7 звезд Vegapharm';
        $opt->key = 'vega-7-stars';
        $opt->wysiwyg = false;
        $opt->save();

        $opt->translations()->where('locale', 'ru')->first()->update([
            'value' => 'В основе крепкого здоровья и комфортного самочувствия лежит 7 добродетелей, 7 постулатов. Все они являются основой и для деятельности Vegapharm.'
        ]);

        $opt->translations()->where('locale', 'en')->first()->update([
            'value' => 'Eng В основе крепкого здоровья и комфортного самочувствия лежит 7 добродетелей, 7 постулатов. Все они являются основой и для деятельности Vegapharm.'
        ]);
    }
}
