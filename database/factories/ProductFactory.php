<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' =>fake()->text(100),
            'price'=>fake()->float(),
            'img'=>fake()->image(null, 360, 360, 'animals', true),
            'visibility'=>fake()->randomElements(['publish', 'not publish']),
            'state'=>fake()->randomElements(['sold', 'soldout']),
            'reference'=>fake()->randomNumber(8, false),
            'category_id'=>Category::all()->random()->id,

            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
