<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medical_specialities;

class Medical_specialitiesSeeder extends Seeder
{
    public function run(): void
    {
        Medical_specialities::create([
            'name' => 'Medicina General',
            'description' => 'Especialidad que se encarga de la atención integral del paciente, abordando diversas condiciones de salud.'
        ]);
        Medical_specialities::create([
            'name' => 'Pediatría',
            'description' => 'Especialidad dedicada al diagnóstico y tratamiento de enfermedades en niños y adolescentes.'
        ]);
        Medical_specialities::create([
            'name' => 'Ginecología',
            'description' => 'Especialidad que se ocupa de la salud de la mujer, incluyendo el sistema reproductivo y los problemas relacionados.'
        ]);
        Medical_specialities::create([
            'name' => 'Oftalmología',
            'description' => 'Especialidad que se centra en el diagnóstico y tratamiento de enfermedades del ojo y la visión.'
        ]);
        Medical_specialities::create([
            'name' => 'Otorrinolaringología',
            'description' => 'Especialidad que trata enfermedades del oído, nariz y garganta.'
        ]);
        Medical_specialities::create([
            'name' => 'Dermatología',
            'description' => 'Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades de la piel, cabello y uñas.'
        ]);
        Medical_specialities::create([
            'name' => 'Cardiología',
            'description' => 'Especialidad dedicada al diagnóstico y tratamiento de enfermedades del corazón y el sistema circulatorio.'
        ]);
        Medical_specialities::create([
            'name' => 'Neumología',
            'description' => 'Especialidad que se centra en el diagnóstico y tratamiento de enfermedades respiratorias y del sistema pulmonar.'
        ]);
        Medical_specialities::create([
            'name' => 'Gastroenterología',
            'description' => 'Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades del sistema digestivo.'
        ]);
        Medical_specialities::create([
            'name' => 'Endocrinología',
            'description' => 'Especialidad que se dedica al estudio y tratamiento de trastornos hormonales y metabólicos.'
        ]);
        Medical_specialities::create([
            'name' => 'Neurología',
            'description' => 'Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades del sistema nervioso.'
        ]);
        Medical_specialities::create([
            'name' => 'Psiquiatría',
            'description' => 'Especialidad que se centra en el diagnóstico y tratamiento de trastornos mentales y emocionales.'
        ]);
        Medical_specialities::create([
            'name' => 'Oncología',
            'description' => 'Especialidad dedicada al diagnóstico y tratamiento del cáncer.'
        ]);
        Medical_specialities::create([
            'name' => 'Radiología',
            'description' => 'Especialidad que utiliza técnicas de imagen para diagnosticar y tratar enfermedades.'
        ]);
        Medical_specialities::create([
            'name' => 'Anestesiología',
            'description' => 'Especialidad que se encarga de la administración de anestesia y el manejo del dolor durante procedimientos quirúrgicos.'
        ]);
        Medical_specialities::create([
            'name' => 'Cirugía General',
            'description' => 'Especialidad que se ocupa de realizar intervenciones quirúrgicas para tratar diversas condiciones médicas.'
        ]);
        Medical_specialities::create([
            'name' => 'Cirugía Cardiaca',
            'description' => 'Especialidad que se enfoca en procedimientos quirúrgicos del corazón y grandes vasos.'
        ]);
        Medical_specialities::create([
            'name' => 'Cirugía Ortopédica',
            'description' => 'Especialidad que se dedica al diagnóstico y tratamiento quirúrgico de lesiones y enfermedades del sistema musculoesquelético.'
        ]);
        Medical_specialities::create([
            'name' => 'Cirugía Plástica',
            'description' => 'Especialidad que se ocupa de la reconstrucción y mejora estética de diferentes partes del cuerpo.'
        ]);
        Medical_specialities::create([
            'name' => 'Urología',
            'description' => 'Especialidad que se centra en el diagnóstico y tratamiento de enfermedades del sistema urinario y reproductor masculino.'
        ]);
        Medical_specialities::create([
            'name' => 'Reumatología',
            'description' => 'Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades reumáticas y autoinmunitarias.'
        ]);
        Medical_specialities::create([
            'name' => 'Infectología',
            'description' => 'Especialidad que se dedica al diagnóstico y tratamiento de enfermedades infecciosas.'
        ]);
        Medical_specialities::create([
            'name' => 'Medicina Interna',
            'description' => 'Especialidad que se centra en el diagnóstico y tratamiento de enfermedades en adultos, abarcando múltiples sistemas del cuerpo.'
        ]);
        Medical_specialities::create([
            'name' => 'Medicina Familiar',
            'description' => 'Especialidad que proporciona atención integral y continua a individuos y familias, abordando una amplia gama de problemas de salud.'
        ]);
        Medical_specialities::create([
            'name' => 'Terapia Física',
            'description' => 'Especialidad que se enfoca en la rehabilitación y mejora de la movilidad a través de ejercicios y tratamientos físicos.'
        ]);
        Medical_specialities::create([
            'name' => 'Nutriología',
            'description' => 'Especialidad que se ocupa del estudio de la nutrición y su impacto en la salud y el bienestar.'
        ]);
        Medical_specialities::create([
            'name' => 'Medicina del Deporte',
            'description' => 'Especialidad que se centra en la prevención y tratamiento de lesiones relacionadas con la actividad física y el deporte.'
        ]);
        Medical_specialities::create([
            'name' => 'Medicina del Trabajo',
            'description' => 'Especialidad que se ocupa de la salud de los trabajadores y la prevención de enfermedades laborales.'
        ]);
        Medical_specialities::create([
            'name' => 'Paliativos',
            'description' => 'Especialidad que se enfoca en el cuidado de pacientes con enfermedades terminales, mejorando su calidad de vida.'
        ]);
        Medical_specialities::create([
            'name' => 'Genética Médica',
            'description' => 'Especialidad que se ocupa del diagnóstico y tratamiento de enfermedades genéticas y hereditarias.'
        ]);
        Medical_specialities::create([
            'name' => 'Geriatría',
            'description' => 'Especialidad que se centra en la atención médica de personas mayores, abordando sus necesidades específicas de salud.'
        ]);
        Medical_specialities::create([
            'name' => 'Medicina Estética',
            'description' => 'Especialidad que se ocupa de mejorar la apariencia física a través de tratamientos médicos y quirúrgicos.'
        ]);
    }
}
