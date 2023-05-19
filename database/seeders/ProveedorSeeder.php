<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedor;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedor = [
            "empresa"=>"prueba1",
            "nombre_proveedor"=>"prueba2",
            "rfn"=>"55543",
            "codigo_postal"=>"2020",
            "calle"=>"5taav",
            "telefono1"=>"6652165",
            "telefono2"=>"773635",
            "telefono3"=>"162662",
            "numero_exterior"=>"65562",
            "numero_interior"=>"12334",
            "pais"=>"mexico",
            "colonia"=>"prueba",
            "delegacion"=>"prueb4",
            "contacto"=>"miguel",
            "email"=>"ejemplo@gmail.com"
        ];
        DB::table('proveedores')->insert($proveedor  );
    }
}
