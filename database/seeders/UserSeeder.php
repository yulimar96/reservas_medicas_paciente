<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $user=User::create(['name'=>'Yulimar','surname1'=>'Dominguez','ci'=>'24805826','email'=>'yuli@gmail.com','password'=>bcrypt('123456789')]);
        $user=User::create(['name'=>'Maribel','surname1'=>'Rojas','ci'=>'13951666','email'=>'mrojas_admin@minaguas.gob.ve','password'=>bcrypt('$20M1n4gu4S23')]);
        $user=User::create(['name'=>'Adrianny','surname1'=>'Balnco','ci'=>'29969511','email'=>'ablanco_admin@minaguas.gob.ve','password'=>bcrypt('$20M1n4gu4S23')]);
        $user=User::create(['name'=>'Abel','surname1'=>'Calzadilla','ci'=>'26279456','email'=>'acalzadilla@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);
        $user=User::create(['name'=>'Amanda','surname1'=>'Charinga','ci'=>'11900979','email'=>'acharinga@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);
        $user=User::create(['name'=>'Ana','surname1'=>'Davila','ci'=>'6018568','email'=>'adavila@minaguas.gob.ve','password'=>bcrypt('minaguas123')]);
    }
}
