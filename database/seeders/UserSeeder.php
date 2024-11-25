<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {

        // Crear el rol Root y asignar permisos
        $rootRole = Role::findByName('Root');
        $rootRole->givePermissionTo(['role-list', 'role-create', 'role-edit', 'role-delete']);

        // Crear usuarios y asignarles roles
        $user = User::create([
            'name_user' => 'yulimar96',
            'email' => 'yuli@gmail.com',
            'password' => bcrypt('123456789'),
            'persons_id' => 1, // ID de la persona Yulimar
           // ID de la persona Yulimar
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name_user' => 'Carmen',
            'email' => 'Carmen@gmail.com',
            'password' => bcrypt('password'),
            'persons_id' => 2,
            // ID de la persona Carmen
        ]);
        $user->assignRole('Secretaria'); // Asegúrate de que este rol exista

        $user = User::create([
            'name_user' => 'Elena',
            'email' => 'Elena@gmail.com',
            'password' => bcrypt('password'),
            'persons_id' => 3,
             // ID de la persona Elena
        ]);
        $user->assignRole('Doctor');

        $user = User::create([
            'name_user' => 'Marta',
            'email' => 'Marta@gmail.com',
            'password' => bcrypt('password'),
            'persons_id' => 4,
            // ID de la persona Marta
        ]);
        $user->assignRole('Patient');

    }
    //  {   $user=User::create(['name'=>'Yulimar96','email'=>'yuli@gmail.com','password'=>bcrypt('123456789')]);
    //     $user=User::create(['name'=>'Maribel','surname1'=>'Rojas','ci'=>'13951666','email'=>'mrojas_admin@minaguas.gob.ve','password'=>bcrypt('$20M1n4gu4S23')]);
    //     $user=User::create(['name'=>'Adrianny','surname1'=>'Balnco','ci'=>'29969511','email'=>'ablanco_admin@minaguas.gob.ve','password'=>bcrypt('$20M1n4gu4S23')]);
    //     $user=User::create(['name'=>'Abel','surname1'=>'Calzadilla','ci'=>'26279456','email'=>'acalzadilla@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);
    //     $user=User::create(['name'=>'Amanda','surname1'=>'Charinga','ci'=>'11900979','email'=>'acharinga@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);
    //     $user=User::create(['name'=>'Ana','surname1'=>'Davila','ci'=>'6018568','email'=>'adavila@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);

}