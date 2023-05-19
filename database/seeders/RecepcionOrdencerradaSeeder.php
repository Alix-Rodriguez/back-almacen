<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RecepcionOrdencerrada;

class RecepcionOrdencerradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordencerrada = [
            "id_almacen"=>1,
            "id_empresas"=>1,
            "status"=>"activo"
        ];
        DB::table('recepcion_ordenescerradas')->insert($ordencerrada);
    }
}
