<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "name" => "admin1",
            "email" => "admin1@gmail.com",
            "cin" => "CD999999",
            "password" => "admin1@gmail.com",
        ]);
    }
}
