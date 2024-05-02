<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NiveauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Niveau::factory()->count(3)->create();
        $data = [
            ['nom' => 'Première année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Deuxième année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Troisième année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Quatrième année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Cinquième année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Sixième année', 'option' => 'null', 'cycle_id' => 1],
            ['nom' => 'Première collégial', 'option' => 'null', 'cycle_id' => 2],
            ['nom' => 'Deuxième collégial', 'option' => 'null', 'cycle_id' => 2],
            ['nom' => 'Troisième collégial', 'option' => 'null', 'cycle_id' => 2],
            ['nom' => 'Première Bac', 'option' => 'null', 'cycle_id' => 3],
            ['nom' => 'Deuxième Bac', 'option' => 'null', 'cycle_id' => 3],
            ['nom' => 'Baccalauréat ', 'option' => 'null', 'cycle_id' => 3],

        ];
        foreach($data as $record){
            Niveau::create($record);
        }
    }
}
