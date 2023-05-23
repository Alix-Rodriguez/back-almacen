<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto=[
            
            "id_empresa" => 1,
             "sku"=>"1212",
             "descripcion"=>"esteee5",
             "modelo"=>"213213 ",
             "id_linea_producto"=>1,
             "id_marca"=>1,
             "serialisable"=>"1",
             "caducidad"=>"",
             "sobresurtimiento"=>"1",
             "serialisable_surtir"=>"1",
             "requiere_inspeccion_calidad"=>"",
             "requiere_fecha_cadu"=> "",
             "numero_parte"=>"1",
             "requiere_lote"=>"",
             "id_config_lote"=>1,
             "id_unidad_de_medida"=>1,
             "peso"=>"2123",
             "fecha_descontinuo"=> "2022-05-11",
             "status"=>"dsadas",
             "kitting"=>"1" 
        ];
        DB::table('productos')->insert($producto);
    }
}
