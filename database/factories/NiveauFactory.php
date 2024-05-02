<?php

namespace Database\Factories;

use App\Models\Cycle;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Niveau>
 */
class NiveauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nom = Arr::random(['primaire', 'secondaire', 'colegial']);
        // $cycle = Cycle::factory()->create();
        return [
            'nom' => $nom,
            'option' => 'option',
            'cycle_id' => Arr::random(['1','2','3']),
        ];
    }
}
