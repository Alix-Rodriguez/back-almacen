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
            "nombre_empresa"=>"prueba nombre empresa",
            "direccion_empresa"=>"Calle 55 #40-60",
            "centro_costo"=>"4324444 2",
            "nif_empresa"=>"4532334443 2"
        ];
        DB::table('empresas')->insert($empresa);
    }
}
