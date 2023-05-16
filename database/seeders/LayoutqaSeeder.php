<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutqaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layoutqa = [
            "id_zonaqa"=>0,
            "id_rackqa"=>2,
            "id_nivelqa"=>3,
            "id_localidadqa"=>4
        ];
        DB::table('layout_q_a_s')->insert($layoutqa);
    }
}
