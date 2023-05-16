<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecepcionProcesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procesar = [
            "id_almacen"=>1,
            "id_empresas"=>1,
            "status"=>"activo"
        ];
        DB::table('recepcion_procesar')->insert($procesar);
    }
}
