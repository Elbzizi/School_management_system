<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Groupe::factory()->count(20)->create();
    // Get all niveaux
    $niveaux = Niveau::all();

    // Define the groupes data
    $groupesData = [];

    // Loop through each niveau
    foreach ($niveaux as $niveau) {
        // Create two groupes for each niveau
        for ($i = 1; $i <= 2; $i++) {
            $groupesData[] = [
                'nom' => $niveau->nom . "($i)",
                'capacite' => 25, // You can adjust the capacity as needed
                'niveau_id' => $niveau->id,
            ];
        }
    }

    // Insert groupes data
    Groupe::insert($groupesData);
    }
}
