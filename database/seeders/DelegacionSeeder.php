<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelegacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delegacion = [
            [
                "descripcion"=>"Álvaro Obregón",
                "code_delegacion"=>101
            ],
            [
                "descripcion"=>"Azcapotzalco",
                "code_delegacion"=>102
            ],
            [
                "descripcion"=>"Benito Juárez",
                "code_delegacion"=>103
            ],
            [
                "descripcion"=>"Coyoacán",
                "code_delegacion"=>104
            ],
            [
                "descripcion"=>"Cuajimalpa de Morelos",
                "code_delegacion"=>105
            ],
            [
                "descripcion"=>"Cuauhtémoc",
                "code_delegacion"=>106
            ],
            [
                "descripcion"=>"Gustavo A. Madero",
                "code_delegacion"=>107
            ],
            [
                "descripcion"=>"Cuajimalpa de Morelos",
                "code_delegacion"=>108
            ],
            [
                "descripcion"=>"Iztacalco",
                "code_delegacion"=>109
            ],
            [
                "descripcion"=>"Iztapalapa",
                "code_delegacion"=>110
            ],
            [
                "descripcion"=>"La Magdalena Contreras",
                "code_delegacion"=>111
            ],
            [
                "descripcion"=>"Miguel Hidalgo",
                "code_delegacion"=>112
            ],
            [
                "descripcion"=>"Milpa Alta",
                "code_delegacion"=>113
            ],
            [
                "descripcion"=>"Municipality name",
                "code_delegacion"=>114
            ],
            [
                "descripcion"=>"Tláhuac",
                "code_delegacion"=>115
            ],
            [
                "descripcion"=>"Tlalpan",
                "code_delegacion"=>116
            ],
            [
                "descripcion"=>"Venustiano Carranza",
                "code_delegacion"=>117
            ],
            [
                "descripcion"=>"Xochimilco",
                "code_delegacion"=>118
            ]
        ];
        DB::table('delegacions')->insert($delegacion);
    }
}
