<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class absence extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    \App\Models\Absence::create([

      'matier' => fake()->firstName(),
      'user_id' => 3,
      'date_Absences' => fake()->date(),
      'description' => fake()->text(),
    ]);
  }
}
