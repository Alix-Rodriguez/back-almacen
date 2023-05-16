<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadcargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidadcarga = [
            "descripcion_unidad_carga" => "prueba1"

        ];
        DB::table('unidad_carga')->insert($unidadcarga);
    }
}
