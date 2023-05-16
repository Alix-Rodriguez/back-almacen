<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class almacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $almacen = [
        "descuento_almacen"=> "34",
        "tipo"=> 1,
        "picking"=> 12,
        "etiqueta_entrada"=> 1,
        /* "usa_zona"=> 1,
        "usa_rack"=> 1,
        "usa_nivel"=> 1,
        "usa_localidad"=> 1, */
        "schedule"=> 1,
        "status"=> 1,
        "contacto"=> "Daniel",
        "calle"=> "Calle 67 #77-79",
        "numero_exterior"=> "+583943234",
        "numero_interno"=> "3004515218",
        "colonia"=> "Mexicali",
        "cp"=> "33445",
        "delegacion_municipio"=> "Ciudad de Mexico",
        "telefono"=> "3343453453",
        "email"=> "hola@gmail.com",
        "usar_ubicacion"=> 1,
        "folio_ubicacion"=> 1,
        // "zona_qa"=> 1,
        // "rack_qa"=> 1,
        // "nivel_qa"=> 1,
        // "localidad_qa"=> 1,
        "nombre"=>"yut"
        ];
        DB::table('almacens')->insert($almacen);
    }
}
