<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Colonias;

class ColoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colonia = [
            [

                "code_delegacion"=>101,
                "descripcion"=>"Libertador",
                "code_colonia"=>201
            ],
            [

                "code_delegacion"=>102,
                "descripcion"=>"Petare",
                "code_colonia"=>202
            ],
             [

                 "code_delegacion"=>104,
                 "descripcion"=>"Valencia",
                 "code_colonia"=>203
            ],
            [

                "code_delegacion"=>105,
                "descripcion"=>"Píritu",
                "code_colonia"=>204
            ],
            [

                "code_delegacion"=>106,
                "descripcion"=>"Maracay",
                "code_colonia"=>205
            ],

            [

                "code_delegacion"=>107,
                "descripcion"=>"Tinaco",
                "code_colonia"=>206
            ],
            [

                "code_delegacion"=>108,
                "descripcion"=>"Calabozo",
                "code_colonia"=>207
            ],
            [

                "code_delegacion"=>109,
                "descripcion"=>"Trujillo",
                "code_colonia"=>208
            ],
            [

                "code_delegacion"=>110,
                "descripcion"=>"El toro",
                "code_colonia"=>209
            ],

            [

                "code_delegacion"=>111,
                "descripcion"=>"Aroa",
                "code_colonia"=>210
            ],
            [

                "code_delegacion"=>112,
                "descripcion"=>"Guanare",
                "code_colonia"=>211
            ],
            [

                "code_delegacion"=>117,
                "descripcion"=>"Barcelona",
                "code_colonia"=>212
            ],
            [

                "code_delegacion"=>118,
                "descripcion"=>"Sucre",
                "code_colonia"=>213
            ],
        ];
        DB::table('colonias')->insert($colonia);
    }
}