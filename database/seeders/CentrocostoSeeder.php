<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CentroCosto;

class CentrocostoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centrocosto = [
            "id_empresa"=> 1,
            "id_cliente"=>1,
            "id_marca"=>1,
            "id_ubicacion_elsea"=>1,
            "descripcion"=>"pr55eba"
        ];
        DB::table('centro_costos')->insert($centrocosto);
    }
}
