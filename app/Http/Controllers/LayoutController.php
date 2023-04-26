<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use App\Models\Localidad;
use App\Models\Nivel;
use App\Models\Rack;
use App\Models\Zona;
use Exception;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function crearZona(Request $request){
        try{
            $zona = new Zona();
            $zona->descripcion = $request->descripcion;
            $zona-> save();
    
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

    public function crearRack(Request $request){
        try{
            $rack = new Rack();
            $rack->descripcion = $request->descripcion;
            $rack-> save();
    
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

    public function crearNivel(Request $request){
        try{
            $nivel = new Nivel();
            $nivel->descripcion = $request->descripcion;
            $nivel-> save();
    
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

    public function crearLocalidad(Request $request){
        try{
            $localidad = new Localidad();
            $localidad->descripcion = $request->descripcion;
            $localidad-> save();
    
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

    public function listarZona(){
        try{

            $zona = Zona::all();
    
            return response([
                "status" => 200,
                "data" => $zona
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarRack(){
        try{

            $rack = Rack::all();
    
            return response([
                "status" => 200,
                "data" => $rack
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarNivel(){
        try{

            $nivel = Nivel::all();
    
            return response([
                "status" => 200,
                "data" => $nivel
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }

    public function listarLocalidad(){
        try{

            $localidad = Localidad::all();
    
            return response([
                "status" => 200,
                "data" => $localidad
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
    }


    //api layout crud

    public function saveLayout(Request $request){
        try{
        
            $layout = new Layout();
            $layout->id_zona = $request->id_zona;
            $layout->id_rack = $request->id_rack;
            $layout->id_nivel = $request->id_nivel;
            $layout->id_localidad = $request->id_localidad;
            $layout->save();

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

    public function listarLayout(Request $request){
        try{
        
            $layout = Layout::all();

            return response([
                "status" => 200,
                "msn"=>$layout
            ]);

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

    
    public function deleteLayout($id){
        try{

            $layout = Layout::destroy($id);
            return response([
                "status" => 200,
                "data" => 'Se ha eliminado registro satisfactoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
    }

    public function  actualizarLayout(Request $request){
        try{
            $layout = Layout::findOrfail($request->id);
            $layout->id_zona = $request->id_zona;
            $layout->id_rack = $request->id_rack;
            $layout->id_nivel = $request->id_nivel;
            $layout->id_localidad = $request->id_localidad;
            $layout->save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha actualizado satisfatoriamente'
            ]);

        } catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } 
}
}    