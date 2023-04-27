<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\LocalidadQA;
use App\Models\NivelQA;
use App\Models\RackQA;
use App\Models\ZonaQA;
use Exception;
use Illuminate\Http\Request;


class LayoutQAController extends Controller
{
    public function crearZonaQA(Request $request){
        try{
            $zonaQA = new ZonaQA();
            $zonaQA->descripcion = $request->descripcion;
            $zonaQA-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function crearRackQA(Request $request){
        try{
            $rackQA = new RackQA();
            $rackQA->descripcion = $request->descripcion;
            $rackQA-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function crearNivelQA(Request $request){
        try{
            $nivelQA = new NivelQA();
            $nivelQA->descripcion = $request->descripcion;
            $nivelQA-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function crearLocalidadQA(Request $request){
        try{
            $localidadQA = new LocalidadQA();
            $localidadQA->descripcion = $request->descripcion;
            $localidadQA-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function listarZonaQA(){
        try{

            $zonaQA = ZonaQA::all();
    
            return response([
                "status" => 200,
                "data" => $zonaQA
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarRackQA(){
        try{

            $rackQA = RackQA::all();
    
            return response([
                "status" => 200,
                "data" => $rackQA
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarNivelQA(){
        try{

            $nivelQA = NivelQA::all();
    
            return response([
                "status" => 200,
                "data" => $nivelQA
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarLocalidadQA(){
        try{

            $localidadQA = LocalidadQA::all();
    
            return response([
                "status" => 200,
                "data" => $localidadQA
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }
}
