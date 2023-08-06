<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Delegacion;
class DelegacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delegacion = [
            [
                "descripcion"=>"Distrito Capital",
                "code_delegacion"=>101
            ],
            [
                "descripcion"=>"Miranda",
                "code_delegacion"=>102
            ],
            [
                "descripcion"=>"Carabobo",
                "code_delegacion"=>104
            ],
            [
                "descripcion"=>"Falcón",
                "code_delegacion"=>105
            ],
            [
                "descripcion"=>"Aragua",
                "code_delegacion"=>106
            ],
            [
                "descripcion"=>"Cojedes",
                "code_delegacion"=>107
            ],
            [
                "descripcion"=>"Guárico",
                "code_delegacion"=>108
            ],
            [
                "descripcion"=>"Trujillo",
                "code_delegacion"=>109
            ],
            [
                "descripcion"=>"Zulia",
                "code_delegacion"=>110
            ],
            [
                "descripcion"=>"Yaracuy",
                "code_delegacion"=>111
            ],
            [
                "descripcion"=>"Portuguesa",
                "code_delegacion"=>112
            ],
            [
                "descripcion"=>"Anzoátegui",
                "code_delegacion"=>117
            ],
            [
                "descripcion"=>"Sucre",
                "code_delegacion"=>118
            ]
        ];
        DB::table('delegacions')->insert($delegacion);
    }
}
