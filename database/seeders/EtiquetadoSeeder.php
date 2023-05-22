<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Etiquetado;

class EtiquetadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetado = [
            "nombre"=>"hoalasa",
            "archivo_img"=>"",
            "status"=>" activo",
            "sistema"=>"453233455 1",
            "impresion" => 1
        ];
        DB::table('etiquetados')->insert($etiquetado);
    }
}
