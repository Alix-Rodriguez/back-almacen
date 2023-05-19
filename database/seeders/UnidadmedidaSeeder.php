<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Unidadmedida;

class UnidadmedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidadmedida = [
            "descripcion" => "prueba"

        ];
        DB::table('unidad_medida')->insert($unidadmedida);
    }
}
