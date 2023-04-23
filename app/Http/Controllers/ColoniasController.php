<?php

namespace App\Http\Controllers;

use App\Models\Colonias;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use function Psy\debug;

class ColoniasController extends Controller
{
    public function guardarAllColonias(Request $request){
        try{
            
            $dele = $request->json();
            foreach($dele as $value){
                $colonia = new Colonias();
                $colonia->code_delegacion = $value["code_delegacion"];
                $colonia->descripcion = $value["descripcion"];
                $colonia->code_colonia = $value["code_colonia"];
                $colonia-> save();
            }
           
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => $e
            ]);
        }
    }

    public function coloniaById($id){

        try{
            $colonia = DB::table('colonias')
            ->where('code_delegacion', '=', $id)
            ->get();
            
            return response([
                "status" => 1,
                "data" => $colonia
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => $e
            ]);
        }
        
    }

}
