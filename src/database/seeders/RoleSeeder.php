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
            ['name' => 'Admin', 'guard_name' => 'admin'],
            ['name' => 'Supervisor', 'guard_name' => 'supervisor'],
            ['name' => 'Advisor', 'guard_name' => 'advisor'],
            ['name' => 'Student', 'guard_name' => 'student'],
            ['name' => 'Judge', 'guard_name' => 'judge'],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
