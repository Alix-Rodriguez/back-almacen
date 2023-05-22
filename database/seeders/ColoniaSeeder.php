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
                "descripcion"=>"El Paraiso",
                "code_colonia"=>201
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Francisco Villa",
                "code_colonia"=>202
            ],
             [

                 "code_delegacion"=>101,
                 "descripcion"=>"Gral C  A  Madrazo",
                 "code_colonia"=>203
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"La Mexicana",
                "code_colonia"=>204
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Lomas De Centenario (U Hab)",
                "code_colonia"=>205
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Lomas De La Era",
                "code_colonia"=>206
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Miguel Hidalgo",
                "code_colonia"=>207
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"San Angel",
                "code_colonia"=>208
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"La Mexicana (Ampl)",
                "code_colonia"=>209
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Ave Real",
                "code_colonia"=>210
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Dos Rios",
                "code_colonia"=>211
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Lomas De Tetelpan",
                "code_colonia"=>212
            ],
            [

                "code_delegacion"=>101,
                "descripcion"=>"Molino De Rosas (Ampl)",
                "code_colonia"=>213
            ],
        ];
        DB::table('colonias')->insert($colonia);
    }
}