<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'supervisor', 'guard_name' => 'web'],
            ['name' => 'advisor', 'guard_name' => 'web'],
            ['name' => 'student', 'guard_name' => 'web'],
            ['name' => 'judge', 'guard_name' => 'web'],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
