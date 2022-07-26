<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\GalleriProductSeeder;

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
            ProductSeeder::class,
            ProductCategorySeeder::class,
            UserSeeder::class,
            CustomerSeeder::class,
            GalleriProductSeeder::class,
        ]);
    }
}
