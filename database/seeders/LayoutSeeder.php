<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Layout;
class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layout = [
            "id_zona"=>1,
            "id_rack"=>1,
            "id_nivel"=>1,
            "id_localidad"=>1
        ];
        DB::table('layouts')->insert($layout);
    }
}
