<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Database\Factories\SizeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        CategorySeeder::class,
        ProductSeeder::class,
        SizeSeeder::class,
        ProductSizeSeeder::class,
    ]);
}
}
