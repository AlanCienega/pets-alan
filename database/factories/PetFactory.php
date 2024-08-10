<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
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
            'type' => fake()->randomElement(['cat', 'dog', 'turtle']),
            'description' => fake()->word(),
            // birthdat before today
            'birth_date' => fake()->date('Y-m-d', strtotime('-1 year')),
        ];
    }
}
