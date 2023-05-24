<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Movimiento_entre_almacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entrealmacen = [
            
            "id_almacen_origen"=>1,
            "id_almacen_destino"=>2,
            "id_empresa"=>1,
            "id_producto"=>1,
            "cantidad"=>"5",
            "id_layout"=>1
            
        ];
        DB::table('movimiento_entre_almacens')->insert($entrealmacen);
    }
}
