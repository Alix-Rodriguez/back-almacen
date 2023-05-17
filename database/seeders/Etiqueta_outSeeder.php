<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Etiqueta_outSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetaout = [
            'id_almacen' => 1,
            'id_empresa' => 1,
            'fecha_picking' => '2023-05-30',
        ];
        DB::table('etiqueta_o_u_t_s')->insert($etiquetaout);
    }
}
