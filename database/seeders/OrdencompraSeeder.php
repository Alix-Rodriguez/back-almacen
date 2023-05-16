<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdencompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordencompra = [
            "referencia"=> "prueba",
            "id_proveedor"=> 1,
            "fecha"=> "2022-05-10",
            "id_centro_costo"=>1,
            "id_tipo_orden"=>"prueba33",
            "central"=> "prueba1",
            "indicaciones"=>"otra prueba",
            "observaciones"=>"ultima prueba"
        ];
        DB::table('orden_compras')->insert($ordencompra);
    }
}
