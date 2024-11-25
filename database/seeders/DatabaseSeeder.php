<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {


        $this->call([CellPhoneAreaCodeSeeder::class]);
        $this->call([PotitionSeeder::class]);
        $this->call([HeadquartersSeeder::class]);
        $this->call([Employee_contract_typesSeeder::class]);
        $this->call([Organizational_unit_typeSeeder::class]);
        $this->call([FederalStateSeeder::class]);
        $this->call([CitiesSeeder::class]);

        $this->call([Medical_specialitiesSeeder::class]);
        $this->call([MunicipalitiesSeeder::class]);
        $this->call([ParishesSeeder::class]);
        $this->call([PhoneAreaCodeSeeder::class]);

        $this->call([RoleSeeder::class]);
        $this->call([PermissionSeeder::class]);
        $this->call([PersonSeeder::class]);
        $this->call([UserSeeder::class]);





    }
}