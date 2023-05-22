<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RecepcionUbicarCerrar;

class RecepcionUbicarcerrarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ubicarcerrar = [
            "id_almacen"=>1,
            "id_empresas"=>1
        ];
        DB::table('recepcion_ubicarcerrar')->insert($ubicarcerrar);
    }
}
