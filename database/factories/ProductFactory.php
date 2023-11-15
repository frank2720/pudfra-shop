<?php

namespace Database\Factories;

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
            'name'=>fake()->word(),
            'price'=>fake()->numberBetween(1500,10000),
            'retail_price'=>fake()->numberBetween(1500,10000),
            'reviews'=>fake()->numberBetween(0,150),
            'img'=>fake()->imageUrl(640,480,'computers'),
            'description'=>fake()->paragraphs(2,true),
        ];
    }
}
