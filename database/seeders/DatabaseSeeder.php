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
        $this->call(ServiceSeeder::class); //Factory
        $this->call(BlogSeeder::class); //Factory
        $this->call(AchievementSeeder::class); //Factory
        $this->call(ReviewSeeder::class); //Factory
        $this->call(CountSeeder::class); //Factory
        $this->call(StaticOptionSeeder::class); //Seeder
        $this->call(UserSeeder::class); //Factory
    }
}
