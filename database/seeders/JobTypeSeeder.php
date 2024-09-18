<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_types')->insert([
            'name' => 'Tiempo completo',
            'description' => 'Puesto con horario laboral completo, generalmente de 40 horas por semana.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Medio tiempo',
            'description' => 'Puesto con un horario reducido en comparación con un trabajo de tiempo completo, generalmente entre 20 y 30 horas por semana.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Honorarios',
            'description' => 'Trabajo independiente en el que se paga por servicios profesionales o consultorías, sin estar en nómina.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Freelance',
            'description' => 'Trabajo autónomo donde el profesional ofrece sus servicios para múltiples clientes de forma independiente.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Prácticas Profesionales',
            'description' => 'Puesto orientado a estudiantes o recién graduados que buscan adquirir experiencia profesional.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Contrato Temporal',
            'description' => 'Puesto ofrecido por un período limitado, diseñado para cubrir una necesidad temporal o estacional.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Trabajo Remoto',
            'description' => 'Puesto que permite al empleado trabajar completamente desde una ubicación diferente a las instalaciones de la empresa.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('job_types')->insert([
            'name' => 'Trabajo por Proyecto',
            'description' => 'Puesto centrado en completar tareas relacionadas con un proyecto específico, de duración determinada.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
