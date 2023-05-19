<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Programaciondetalle;
class ProgramaciondetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programaciondetalle = [
            "id_programacion_progreso"=> 1,
            "id_producto"=> 1,
            "SKU"=>"0003",
            "unidad_medida"=>"cm",
            "cantidad"=>"4",
            "descripcion"=>"funciona"
        ];
        DB::table('programacion_detalle')->insert($programaciondetalle);
    }
}
