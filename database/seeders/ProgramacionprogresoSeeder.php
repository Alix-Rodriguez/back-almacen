<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramacionProgreso;
class ProgramacionprogresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programaciondetalle = [
            "id_proveedor"=> 1,
            "id_almacen"=> 1,
            "id_empresa"=>1,
            "fecha"=>"2022-10-12",
            "indicaciones"=>"prueba",
            "observacion"=>"prueba2"
        ];
        DB::table('programacion_progreso')->insert($programaciondetalle);
    }
}
