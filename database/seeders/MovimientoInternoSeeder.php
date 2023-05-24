<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovimientoInternoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interno = [
            
            "id_empresa"=>1,
            "id_almacen"=>1,
            "id_producto"=>1,
            "cantidad"=>"10",
            "id_layout"=>1
            
        ];
        DB::table('movimiento_internos')->insert($interno);
    }
}
