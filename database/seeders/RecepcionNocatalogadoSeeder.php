<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecepcionNocatalogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nocatalogado = [
            "id_almacen"=>1,
            "id_empresas"=>1
        ];
        DB::table('recepcion_nocatalogado')->insert($nocatalogado);
    }
}
