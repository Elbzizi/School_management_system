<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Admin::class;

    public function definition(): array
    {
        // $faker = Faker\Factory::create();
        $sexe = Arr::random(['homme', 'femme']);
        $role =  'enseignant';
        $photo = 'assets/img/logonull.jpg';
        return [
            'name' => fake()->firstName(),
            'prenom' =>fake()->firstName(),
            'sexe' => $sexe,
            'date_naissance' => fake()->date(),
            'cin' => fake()->numberBetween(1000000, 9999999), // Generates an 8-digit number
            'photo' =>$photo,
            'adress' => fake()->address(),
            'role' => $role,
            'statut' => 'active',
            'tel' => fake()->phoneNumber(),
            'email' =>fake()->email(),
            'password' => '20232024',
        ];
    }
}
