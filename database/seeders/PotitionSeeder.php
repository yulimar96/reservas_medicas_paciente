<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Potition;

class PotitionSeeder extends Seeder
{
    public function run()
    {
        Potition::create(['name' => 'Presidente', 'description' => 'Responsable de la dirección estratégica y la gestión general de la organización. Representa a la empresa ante terceros y toma decisiones clave.']);
        Potition::create(['name' => 'Vicepresidente', 'description' => 'Asiste al presidente y supervisa las operaciones de la organización, actuando como su reemplazo en su ausencia.']);
        Potition::create(['name' => 'Secretario', 'description' => 'Encargado de la documentación y actas de las reuniones de la junta, así como de la gestión administrativa.']);
        Potition::create(['name' => 'Tesorero', 'description' => 'Responsable de la gestión financiera, incluyendo la contabilidad, presupuestos y reportes financieros.']);
        Potition::create(['name' => 'Gerente', 'description' => 'Supervisa las operaciones de un departamento específico y es responsable de alcanzar los objetivos establecidos.']);
        Potition::create(['name' => 'Coordinador', 'description' => 'Coordina proyectos y actividades dentro de un departamento, asegurando la comunicación y colaboración entre equipos.']);
        Potition::create(['name' => 'Analista', 'description' => 'Realiza análisis de datos y proporciona informes para la toma de decisiones estratégicas.']);
        Potition::create(['name' => 'Director', 'description' => 'Dirige un área específica de la organización, estableciendo objetivos estratégicos y supervisando su cumplimiento.']);
        Potition::create(['name' => 'Subdirector', 'description' => 'Asiste al director en la gestión de su área y supervisa las operaciones diarias.']);
        Potition::create(['name' => 'Jefe de Departamento', 'description' => 'Lidera un departamento y es responsable de su rendimiento y desarrollo.']);
        Potition::create(['name' => 'Supervisor', 'description' => 'Supervisa el trabajo de un equipo, asegurando el cumplimiento de objetivos y estándares de calidad.']);
        Potition::create(['name' => 'Asistente', 'description' => 'Brinda apoyo administrativo y operativo a un departamento o ejecutivo, gestionando tareas diarias.']);
        Potition::create(['name' => 'Consultor', 'description' => 'Proporciona asesoría experta en un área específica, ayudando a la organización a mejorar su rendimiento.']);
        Potition::create(['name' => 'Representante', 'description' => 'Actúa como enlace entre la organización y sus clientes o socios, gestionando relaciones y ventas.']);
        Potition::create(['name' => 'Administrativo', 'description' => 'Realiza tareas administrativas y de soporte en la organización, asegurando el funcionamiento eficiente de las operaciones.']);
        Potition::create(['name' => 'Responsable de Proyectos', 'description' => 'Gestiona y coordina proyectos desde su inicio hasta su finalización, asegurando el cumplimiento de plazos y objetivos.']);
        Potition::create(['name' => 'Desarrollador', 'description' => 'Diseña y desarrolla software y aplicaciones, trabajando en colaboración con otros equipos técnicos.']);
        Potition::create(['name' => 'Diseñador', 'description' => 'Crea y desarrolla conceptos visuales y gráficos para proyectos, asegurando la coherencia de la marca.']);
        Potition::create(['name' => 'Investigador', 'description' => 'Realiza investigaciones para recopilar datos y análisis que apoyen la toma de decisiones estratégicas.']);
        Potition::create(['name' => 'Operador', 'description' => 'Maneja y opera maquinaria o equipos, asegurando su correcto funcionamiento y mantenimiento.']);
        Potition::create(['name' => 'Vendedor', 'description' => 'Responsable de la venta de productos o servicios, gestionando relaciones con clientes y alcanzando objetivos de ventas.']);
        Potition::create(['name' => 'Promotor', 'description' => 'Promociona productos o servicios, generando interés y atrayendo clientes potenciales.']);
        Potition::create(['name' => 'Auditor', 'description' => 'Realiza auditorías internas y externas para evaluar la conformidad y eficiencia de los procesos.']);
        Potition::create(['name' => 'Controlador', 'description' => 'Supervisa y controla los procesos operativos y financieros, asegurando el cumplimiento de políticas y procedimientos.']);
        Potition::create(['name' => 'Planificador', 'description' => 'Desarrolla y coordina planes estratégicos y operativos para alcanzar los objetivos de la organización, asegurando la asignación eficiente de recursos.']);
        Potition::create(['name' => 'Capacitador', 'description' => 'Diseña y ejecuta programas de capacitación para el desarrollo de habilidades y competencias del personal.']);
        Potition::create(['name' => 'Comunicación', 'description' => 'Gestiona la comunicación interna y externa de la organización, asegurando la coherencia del mensaje y la imagen de la marca.']);
        Potition::create(['name' => 'Especialista en Marketing', 'description' => 'Desarrolla e implementa estrategias de marketing para promover productos o servicios y aumentar la visibilidad de la marca.']);
        Potition::create(['name' => 'Analista de Recursos Humanos', 'description' => 'Gestiona procesos de selección, capacitación y desarrollo del personal, así como la administración de beneficios y relaciones laborales.']);
        Potition::create(['name' => 'Gerente de Ventas', 'description' => 'Supervisa el equipo de ventas, establece objetivos y estrategias para maximizar los ingresos y la satisfacción del cliente.']);
        Potition::create(['name' => 'Coordinador', 'description' => 'Coordina actividades y recursos en un área específica, asegurando la alineación con los objetivos organizacionales.']);
        Potition::create(['name' => 'Analista', 'description' => 'Realiza análisis detallados y proporciona recomendaciones basadas en datos para mejorar procesos y decisiones.']);
    }
}
