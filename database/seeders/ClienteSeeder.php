<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = [
            "nombre_cliente"=> "202020",
            "nif"=>"12345",
            "calle"=>"nro 5",
            "colonia"=>"cualquiera",
            "pais"=>"mexico",
            "telefono"=>"59 5772889",
            "telefono_opcional"=> "57 745632",
            "codigoPostal"=>2020,
            "email"=>"ejemplo@gmail.com",
            "contacto"=>"persona",
            "delegacion"=>"daniel",
            "id_empresa"=>"01",
            "telefono_opcional2"=>"58 556775",
            "numero_interior"=>"56 439822",
            "numero_exterior"=>"59 999999"
        ];
        DB::table('clientes')->insert($cliente);
    }
}
