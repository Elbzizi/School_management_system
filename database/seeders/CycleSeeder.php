<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Cycle = [[
                'nom_cycle' => 'primaire',
                'description' => 'primairee',
        ],[
                'nom_cycle' => 'secondaire collégial',
                'description' => 'collégialr',
        ],[
                'nom_cycle' => 'secondaire qualifiant',
                'description' => 'qualifiant',
        ]

    ];
    Cycle::insert($Cycle);
    }
}
