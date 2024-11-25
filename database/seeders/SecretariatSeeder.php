<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persons;

class SecretariatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persons::create([
        'persons_id'=>2,
        'employee_contract_types_id'=>1,
        'potition_id'=>1,
        'organizational_unit_types_id'=>1]);
    }
}
