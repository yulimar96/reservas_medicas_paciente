<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organizational_unit_types;

class Organizational_unit_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizational_unit_types::create(['name' => 'Recursos Humanos', 'headquarter_id' => 1, 'description' => 'Gestión del talento humano y desarrollo organizacional.']);
Organizational_unit_types::create(['name' => 'Finanzas', 'headquarter_id' => 2, 'description' => 'Manejo de recursos económicos y planificación financiera.']);
Organizational_unit_types::create(['name' => 'Marketing', 'headquarter_id' => 3, 'description' => 'Estrategias para promover productos y servicios.']);
Organizational_unit_types::create(['name' => 'Ventas', 'headquarter_id' => 4, 'description' => 'Generación de ingresos a través de la comercialización.']);
Organizational_unit_types::create(['name' => 'Operaciones', 'headquarter_id' => 5, 'description' => 'Gestión de procesos y recursos para la producción.']);
Organizational_unit_types::create(['name' => 'Investigación y Desarrollo', 'headquarter_id' => 6, 'description' => 'Innovación y mejora de productos y servicios.']);
Organizational_unit_types::create(['name' => 'Atención al Cliente', 'headquarter_id' => 7, 'description' => 'Soporte y servicio a los clientes.']);
Organizational_unit_types::create(['name' => 'Tecnologías de la Comunicación e Información', 'headquarter_id' => 8, 'description' => 'Gestión de sistemas informáticos y comunicación.']);
Organizational_unit_types::create(['name' => 'Producción', 'headquarter_id' => 9, 'description' => 'Fabricación y ensamblaje de productos.']);
Organizational_unit_types::create(['name' => 'Logística', 'headquarter_id' => 10, 'description' => 'Gestión de la cadena de suministro y distribución.']);
Organizational_unit_types::create(['name' => 'Calidad', 'headquarter_id' => 11, 'description' => 'Aseguramiento y control de calidad de productos y servicios.']);
Organizational_unit_types::create(['name' => 'Comunicación Interna', 'headquarter_id' => 12, 'description' => 'Flujo de información dentro de la organización.']);
Organizational_unit_types::create(['name' => 'Legal', 'headquarter_id' => 13, 'description' => 'Asesoría y gestión de asuntos legales.']);
Organizational_unit_types::create(['name' => 'Relaciones Públicas', 'headquarter_id' => 14, 'description' => 'Manejo de la imagen y comunicación con el público.']);
Organizational_unit_types::create(['name' => 'Desarrollo de Negocios', 'headquarter_id' => 15, 'description' => 'Identificación de oportunidades de crecimiento y expansión.']);
Organizational_unit_types::create(['name' => 'Planificación Estratégica', 'headquarter_id' => 16, 'description' => 'Definición de objetivos y estrategias a largo plazo.']);
Organizational_unit_types::create(['name' => 'Formación y Capacitación', 'headquarter_id' => 17, 'description' => 'Desarrollo de habilidades y competencias del personal.']);
Organizational_unit_types::create(['name' => 'Sistemas de Información', 'headquarter_id' => 18, 'description' => 'Gestión de datos y tecnología de la información.']);
Organizational_unit_types::create(['name' => 'Seguridad y Salud Ocupacional', 'headquarter_id' => 19, 'description' => 'Protección y bienestar de los empleados en el trabajo.']);
Organizational_unit_types::create(['name' => 'Responsabilidad Social Empresarial', 'headquarter_id' => 20, 'description' => 'Compromiso con prácticas éticas y sostenibles.']);
    }
}
