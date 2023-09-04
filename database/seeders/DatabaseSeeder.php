<?php

namespace Database\Seeders;

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

            HomePageSeeder::class,
            FeaturedCandidateSeeder::class,
            PartenerReviewSeeder::class,
            ServiceSeeder::class,
            SettingSeeder::class,
            AboutSeeder::class,
            //
            LayerTypeSeeder::class,
            IncomeTaxSeeder::class,

        ]);
    }
}
