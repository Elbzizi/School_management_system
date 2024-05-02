<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cycle>
 */
class CycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nom = Arr::random(['primaire', 'secondaire collégial', 'secondaire qualifiant']);
        return [
            'nom_cycle' => ucfirst($nom), // Capitalize the first letter
            'description' => fake()->firstName,
        ];
    }
}
