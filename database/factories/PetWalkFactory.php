<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetWalk>
 */
class PetWalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => fake()->streetSuffix(),
            'walk_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'pet_id' => Pet::inRandomOrder()->first()->id
        ];
    }
}
