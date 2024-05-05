<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\admin_matier_groupe;
use App\Models\Matier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    // User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    $this->call([AdminSeder::class]);
    $this->call(CycleSeeder::class);
    $this->call(NiveauxSeeder::class);
    $this->call(GroupesSeeder::class);
    $this->call(UserSeder::class);
    $this->call(absence::class);
    Matier::factory(30)->create();
    admin_matier_groupe::factory(10)->create();

  }
}
