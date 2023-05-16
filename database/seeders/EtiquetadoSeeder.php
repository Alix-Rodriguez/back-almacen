<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetado = [
            "nombre"=>"hoalasa",
            "direccion_empresa"=>"Calle 1",
            "centro_costo"=>"432435354 1",
            "archivo_img"=>"images",
            "nif_empresa"=>"453233455 1"
        ];
        DB::table('etiquetados')->insert($etiquetado);
    }
}
