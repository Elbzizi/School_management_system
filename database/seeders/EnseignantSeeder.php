<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Database\Factories\EnseignantFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnseignantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run()
        {
            Admin::factory(EnseignantFactory::class)->count(2)->create([
                'role' => 'enseignant',
                'email' => 'enseignant@gmail.com',
                'password' => bcrypt('enseignant123'),
            ]);
        }

}
