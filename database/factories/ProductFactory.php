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
            'description'=>fake()->paragraphs(2,true),
        ];
    }
}
