<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Etiqueta_inSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetain = [
            'id_almacen' => 1,
            'id_empresa' => 1,
            'fecha' => '2023-05-20',
            'referencia' => 'prueba'
        ];
        DB::table('etiqueta_i_n_s')->insert($etiquetain);
    }
}
