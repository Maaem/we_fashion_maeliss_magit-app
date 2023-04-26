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
            'price'=>fake()->randomNumber(),
            'img'=>fake()->imageUrl(null, 360, 360, 'animals', true),
            'visibility'=>fake()->randomElement(['publish', 'not publish']),
            'state'=>fake()->randomElement(['sold', 'soldout']),
            'reference'=>fake()->unique()->word(),
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
