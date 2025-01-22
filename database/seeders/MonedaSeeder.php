<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now =Carbon::now();

        $monedas=[
            ['codigo' => 'MXN', 'nombre' => 'Peso mexicano', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'COP', 'nombre' => 'Peso colombiano', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'USD', 'nombre' => 'Dólar estadounidense', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'ARS', 'nombre' => 'Peso argentino', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'CLP', 'nombre' => 'Peso chileno', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'PEN', 'nombre' => 'Sol peruano', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'VES', 'nombre' => 'Bolívar soberano', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'UYU', 'nombre' => 'Peso uruguayo', 'created_at' => $now, 'updated_at' => $now],
            ['codigo' => 'EUR', 'nombre' => 'Euro', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('monedas')->insert($monedas);
    }
}
