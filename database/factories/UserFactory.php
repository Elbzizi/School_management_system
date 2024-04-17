<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = Faker\Factory::create();
        $sexe = Arr::random(['homme', 'femme']);
        $role =  'etudiant';
        $email = 'user@gmail.com';
        $photo = 'assets/img/logonull.jpg';
        return [
            'name' => fake()->firstName(),
            'prenom' =>fake()->lastName(),
            'sexe' => $sexe,
            'date_naissance' => fake()->date(),
            'cin' => fake()->numberBetween(1000000, 9999999), // Generates an 8-digit number
            'photo' =>$photo,
            'role' => $role,
            'adress' => fake()->address(),
            'statut' => 'desactive',
            'tel' => fake()->phoneNumber(),
            'email' =>$email,
            'password' => 'useruser',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
