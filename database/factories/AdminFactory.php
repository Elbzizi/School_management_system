<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = Faker\Factory::create();
        $sexe = Arr::random(['homme', 'femme']);
        $role =  'directeur';
        $email = 'directeur@gmail.com';
        $photo = 'assets/img/logonull.jpg';
        return [
            'name' => fake()->firstName(),
            'prenom' =>fake()->lastName(),
            'sexe' => $sexe,
            'date_naissance' => fake()->date(),
            'cin' => fake()->numberBetween(1000000, 9999999), // Generates an 8-digit number
            'photo' =>$photo,
            'adress' => fake()->address(),
            'role' => $role,
            'statut' => 'actif',
            'tel' => fake()->phoneNumber(),
            'email' =>$email,
            'password' => '20232024',
        ];
    }
}
