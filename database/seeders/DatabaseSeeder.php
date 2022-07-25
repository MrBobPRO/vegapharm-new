<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocaleSeeder::class,
            StarSeeder::class,
            AchievementSeeder::class,
            CategorySeeder::class,
            PresenceSeeder::class,
            OptionSeeder::class,
            ProductSeeder::class
        ]);
    }
}
