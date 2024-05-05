<?php

namespace Database\Factories;
use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matier>
 */
class MatierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      // $admin_id = Arr::random([1]);
      // $groupe_id = Arr::random([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
      return [
        'nom_matier' => ucfirst(fake()->name()),
        'Coefficient' => fake()->numberBetween(1, 10),
        'duree' => fake()->numberBetween(30, 100),
        // 'admin_id' => 1,
        // 'groupe_id' => $groupe_id,
      ];
    }
}
