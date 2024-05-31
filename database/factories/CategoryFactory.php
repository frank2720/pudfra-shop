<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category'=> $this->faker->unique()->randomElement(['Laptops', 'Desktop Accessories', 'Laptop Accessories', 'Smart Phones', 'Watches', 'Phones','Men Clothes','Women clothes'])
        ];
    }
}
