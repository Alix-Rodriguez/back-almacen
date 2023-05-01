<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use App\Models\Localidad;
use App\Models\Nivel;
use App\Models\Rack;
use App\Models\Zona;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function listarLayout(){
        //try{


            $resultado = DB::table('layouts')
            ->leftJoin('zonas','zonas.id','=','layouts.id_zona')
            ->leftJoin('racks','racks.id','=','layouts.id_rack')
            ->leftJoin('nivels','nivels.id','=','layouts.id_nivel')
            ->leftJoin('localidads','localidads.id','=','layouts.id_localidad')
            ->select('zonas.id as id_zona','zonas.descripcion as descripcion_zona',
            'racks.id as id_racks', 'racks.descripcion as descripcion_racks',
            'nivels.id as id_nivels','nivels.descripcion as descripcion_nivels',
            'localidads.id as id_localidads','localidads.descripcion as descripcion_localidads',
            'layouts.id')
            ->get();
            return response([
                "status" => 200,
                "data" => $resultado
            ]);
        
           /*  $zona = DB::table('zonas')->select('descripcion', 'descripcion as zona_id');
            $resultado= DB::table('layouts')
                ->joinSub($zona, 'zona',function($join){
                    $join->on('zona.descripcion','=','layouts.id');
                })->get();
                return $resultado; */
        /* }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => $e
            ]);
        } */

        /* }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        } */
        
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
    public function deleteZona($id){
        try{

            $zona = Zona::destroy($id);
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
    public function  actualizarZona(Request $request){
        try{
            $zona = Zona::findOrfail($request->id);
            $zona->descripcion = $request->descripcion;
            $zona->save();
    
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
    public function deleteRack($id){
        try{

            $rack = Rack::destroy($id);
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
    public function  actualizarRack(Request $request){
        try{
            $rack = Rack::findOrfail($request->id);
            $rack->descripcion = $request->descripcion;
            $rack->save();
    
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
    public function deleteNivel($id){
        try{

            $nivel = Nivel::destroy($id);
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
    public function  actualizarNivel(Request $request){
        try{
            $nivel = Nivel::findOrfail($request->id);
            $nivel->descripcion = $request->descripcion;
            $nivel->save();
    
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
    public function deleteLocalidad($id){
        try{

            $localidad = Localidad::destroy($id);
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
    public function  actualizarLocalidad(Request $request){
        try{
            $Localidad = Localidad::findOrfail($request->id);
            $Localidad->descripcion = $request->descripcion;
            $Localidad->save();
    
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