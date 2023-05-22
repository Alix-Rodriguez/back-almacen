<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Empresas;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empresa = [
            "nombre_empresa"=>"Jirehpro",
            "direccion_empresa"=>"Calle 67 #77-79",
            "centro_costo"=>"432435354 1",
            "logo_empresa"=>"images",
            "nif_empresa"=>"453233455 1"
        ];
        DB::table('empresas')->insert($empresa);
    }
}
