<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::factory()->count(30)->create();

    $sexe = Arr::random(['homme', 'femme']);
    $role = 'etudiant';
    $photo = 'assets/img/logonull.jpg';

    User::create([
      'name' => fake()->firstName(),
      'prenom' => fake()->lastName(),
      'sexe' => $sexe,
      'date_naissance' => fake()->date(),
      'cin' => fake()->numberBetween(1000000, 9999999),
      'photo' => $photo,
      'role' => $role,
      'adress' => fake()->address(),
      'statut' => 'desactive',
      'tel' => fake()->phoneNumber(),
      'email' => "user1@gmail.com",
      'password' => bcrypt('useruser'), // Utilisez bcrypt pour le mot de passe
    ]);
  }
}