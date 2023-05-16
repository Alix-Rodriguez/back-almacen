<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KittingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kitting = [
            "id_kitting"=>"",
            "id_producto"=>1
        ];
        DB::table('kittings')->insert($kitting);
    }
}
