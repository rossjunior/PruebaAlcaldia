<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Department::create(['name' => 'Tolima']);
        \App\Models\Department::create(['name' => 'Cundinamarca']);
        \App\Models\Department::create(['name' => 'Huila']);
        \App\Models\Department::create(['name' => 'Antioquia']);
    }
}
