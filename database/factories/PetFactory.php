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
            'name' => fake()->firstName(),
            'type' => fake()->randomElement(['cat', 'dog', 'turtle']),
            'description' => fake()->word(),
            // birthdat before today
            'birth_date' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
