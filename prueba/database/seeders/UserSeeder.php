<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departmentIds = \App\Models\Department::pluck('id')->toArray();

        \App\Models\User::factory(30)->create([
        'department_id' => Arr::random($departmentIds),
    ]);
    }
}
