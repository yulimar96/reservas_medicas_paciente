<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Headquarters;

class HeadquartersSeeder extends Seeder
{
    public function run(): void
    {
        Headquarters::create(['name' => 'San Bernandino', 'address' => 'Calle Principal 123, San Bernandino']);
        Headquarters::create(['name' => 'Centro Médico Norte', 'address' => 'Avenida Norte 456, Ciudad Norte']);
        Headquarters::create(['name' => 'Hospital del Sur', 'address' => 'Calle del Sur 789, Ciudad Sur']);
        Headquarters::create(['name' => 'Clínica de la Costa', 'address' => 'Avenida Costera 101, Ciudad Costera']);
        Headquarters::create(['name' => 'Centro de Salud Este', 'address' => 'Calle Este 202, Ciudad Este']);
        Headquarters::create(['name' => 'Hospital General', 'address' => 'Avenida General 303, Ciudad General']);
        Headquarters::create(['name' => 'Clínica Familiar', 'address' => 'Calle Familiar 404, Ciudad Familiar']);
        Headquarters::create(['name' => 'Centro de Atención Médica', 'address' => 'Avenida Médica 505, Ciudad Médica']);
        Headquarters::create(['name' => 'Hospital de Especialidades', 'address' => 'Calle Especialidades 606, Ciudad Especialidades']);
        Headquarters::create(['name' => 'Clínica de Rehabilitación', 'address' => 'Avenida Rehabilitación 707, Ciudad Rehabilitación']);
        Headquarters::create(['name' => 'Centro de Salud Mental', 'address' => 'Calle Salud Mental 808, Ciudad Salud Mental']);
        Headquarters::create(['name' => 'Hospital Infantil', 'address' => 'Avenida Infantil 909, Ciudad Infantil']);
        Headquarters::create(['name' => 'Clínica de Urgencias', 'address' => 'Calle Urgencias 111, Ciudad Urgencias']);
        Headquarters::create(['name' => 'Centro de Medicina Preventiva', 'address' => 'Avenida Preventiva 222, Ciudad Preventiva']);
        Headquarters::create(['name' => 'Hospital de Oncología', 'address' => 'Calle Oncología 333, Ciudad Oncología']);
        Headquarters::create(['name' => 'Clínica de Cardiología', 'address' => 'Avenida Cardiología 444, Ciudad Cardiología']);
        Headquarters::create(['name' => 'Centro de Atención al Adulto Mayor', 'address' => 'Calle Adulto Mayor 555, Ciudad Adulto Mayor']);
        Headquarters::create(['name' => 'Hospital de Emergencias', 'address' => 'Avenida Emergencias 666, Ciudad Emergencias']);
        Headquarters::create(['name' => 'Clínica de Salud Sexual', 'address' => 'Calle Salud Sexual 777, Ciudad Salud Sexual']);
        Headquarters::create(['name' => 'Centro de Medicina Alternativa', 'address' => 'Avenida Alternativa 888, Ciudad Alternativa']);
        Headquarters::create(['name' => 'Hospital de Traumatología', 'address' => 'Calle Traumatología 999, Ciudad Traumatología']);

}
}
