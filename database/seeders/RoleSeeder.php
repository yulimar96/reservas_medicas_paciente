<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Secretaria']);
        Role::create(['name' => 'Doctor']);
        Role::create(['name' => 'Patient']);
        Role::create(['name' => 'Root']);
    }
}