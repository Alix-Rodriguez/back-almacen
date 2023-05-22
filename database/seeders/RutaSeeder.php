<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ruta;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ruta = [
            "nombre_ruta"=>"hola",
            "empresa"=>1,
            "almacen"=>1,
            "codigo_postal_inicio"=> "prueba",
            "codigo_postal_fin"=>"prueba2"
        ];
        DB::table('rutas')->insert($ruta);
    }
}
