<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persons;
class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Persons::create(['name_1'=>'Yulimar','surname_1'=>'Dominguez','nacionality'=>1,'identity_number'=>'24805826','phone_area_codes_id'=>1,'phone_number'=>'0941508','cell_phone_area_codes_id'=>1,'cellphone_number'=>'0941508','federals_state_id'=>1,'municipalities_id'=>1,'parishes_id'=>1,'cities_id'=>1,'birth_date'=>'1996-05-02']);
         Persons::create(['name_1'=>'Carmen','surname_1'=>'Martinez','nacionality'=>1,'identity_number'=>'23576908','phone_area_codes_id'=>1,'phone_number'=>'0941508','cell_phone_area_codes_id'=>1,'cellphone_number'=>'0941508','federals_state_id'=>1,'municipalities_id'=>1,'parishes_id'=>1,'cities_id'=>1,'birth_date'=>'1996-05-02','birth_date'=>'1996-05-02']);
         Persons::create(['name_1'=>'Elena','surname_1'=>'Matos','nacionality'=>1,'identity_number'=>'25467890','phone_area_codes_id'=>1,'phone_number'=>'0941508','cell_phone_area_codes_id'=>1,'cellphone_number'=>'0941508','federals_state_id'=>1,'municipalities_id'=>1,'parishes_id'=>1,'cities_id'=>1,'birth_date'=>'1996-05-02', 'address'=>1,'birth_date'=>'1996-05-02']);
         Persons::create(['name_1'=>'Marta','surname_1'=>'Rodriguez','nacionality'=>1,'identity_number'=>'25678754','phone_area_codes_id'=>1,'phone_number'=>'0941508','cell_phone_area_codes_id'=>1,'cellphone_number'=>'0941508','federals_state_id'=>1,'municipalities_id'=>1,'parishes_id'=>1,'cities_id'=>1,'parishes_id'=>1,'birth_date'=>'1996-05-02','birth_date'=>'1996-05-02']);

    }
}