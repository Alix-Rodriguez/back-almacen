<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pais = [
            "codigo_pais"=>"mx",
            "pais" => "Mexico"
        ];
        DB::table('paises')->insert($pais);
    }
}
