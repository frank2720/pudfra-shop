<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Town>
 */
class TownFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'town'=> $this->faker->city(),
            'latitude'=> $this->faker->latitude(-6.5,3),
            'longitude'=> $this->faker->longitude(10,60),
            'county'=> $this->faker->state(),
            'country'=> $this->faker->country(),
            'admin_name'=> $this->faker->name(),
        ];
    }
}
