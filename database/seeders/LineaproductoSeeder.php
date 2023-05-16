<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineaproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $lineaproducto = [

        "descripcion"=>"prueba1"
    ];
    DB::table('linea_productos')->insert($lineaproducto);
    }
}