<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrecuenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fecha_actual = Carbon::now();

        $frecuencias = [
            ['nombre' => 'mensual',   'dias' => 30, 'created_at' => $fecha_actual, 'updated_at' => $fecha_actual],
            ['nombre' => 'quincenal', 'dias' => 15, 'created_at' => $fecha_actual, 'updated_at' => $fecha_actual],
            ['nombre' => 'semanal',   'dias' => 7,  'created_at' => $fecha_actual, 'updated_at' => $fecha_actual],
            ['nombre' => 'diario',    'dias' => 1,  'created_at' => $fecha_actual, 'updated_at' => $fecha_actual],
        ];

        DB::table('frecuencias')->insert($frecuencias);
    }
}
