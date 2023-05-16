<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layout = [
            "id_zona"=>1,
            "id_rack"=>2,
            "id_nivel"=>3,
            "id_localidad"=>4
        ];
        DB::table('layouts')->insert($layout);
    }
}
