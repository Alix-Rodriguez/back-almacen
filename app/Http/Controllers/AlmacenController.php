<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Exception;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function listarAlmacenes(){
        try{
            $almacen = Almacen::all();
    
            return response([
                "status" => 200,
                "data" => $almacen
            ]);

        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'Error'
            ]);
        }
    }

    public function guardarAlmacen(Request $request){
        try{

            $almacen = new Almacen();

            $almacen->descuento_almacen = $request->descuento_almacen;
            $almacen->tipo = $request->tipo;
            $almacen->picking = $request->picking;
            $almacen->etiqueta_entrada = $request->etiqueta_entrada;
            $almacen->usa_zona = $request->usa_zona;
            $almacen->usa_rack = $request->usa_rack;
            $almacen->usa_nivel = $request->usa_nivel;
            $almacen->usa_localidad = $request->usa_localidad;
            $almacen->schedule = $request->schedule;
            $almacen->status = $request->status;
            $almacen->contacto = $request->contacto;
            $almacen->calle = $request->calle;
            $almacen->numero_exterior = $request->numero_exterior;
            $almacen->numero_interno = $request->numero_interno;
            $almacen->colonia = $request->colonia;
            $almacen->cp = $request->cp;
            $almacen->delegacion_municipio = $request->delegacion_municipio;
            $almacen->telefono = $request->telefono;
            $almacen->email = $request->email;
            $almacen->usar_ubicacion = $request->usar_ubicacion;
            $almacen->folio_ubicacion = $request->folio_ubicacion;
            $almacen->zona_qa = $request->zona_qa;
            $almacen->rack_qa = $request->rack_qa;
            $almacen->nivel_qa = $request->nivel_qa;
            $almacen->localidad_qa = $request->localidad_qa;
            $almacen->nombre = $request->nombre;
            $almacen-> save();
    
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

    public function updateAlmacen(Request $request){
        try{

            $almacen = Almacen::findOrfail($request->id);

            $almacen->descuento_almacen = $request->descuento_almacen;
            $almacen->tipo = $request->tipo;
            $almacen->picking = $request->picking;
            $almacen->etiqueta_entrada = $request->etiqueta_entrada;
            $almacen->usa_zona = $request->usa_zona;
            $almacen->usa_rack = $request->usa_rack;
            $almacen->usa_nivel = $request->usa_nivel;
            $almacen->usa_localidad = $request->usa_localidad;
            $almacen->schedule = $request->schedule;
            $almacen->status = $request->status;
            $almacen->contacto = $request->contacto;
            $almacen->calle = $request->calle;
            $almacen->numero_exterior = $request->numero_exterior;
            $almacen->numero_interno = $request->numero_interno;
            $almacen->colonia = $request->colonia;
            $almacen->cp = $request->cp;
            $almacen->delegacion_municipio = $request->delegacion_municipio;
            $almacen->telefono = $request->telefono;
            $almacen->email = $request->email;
            $almacen->usar_ubicacion = $request->usar_ubicacion;
            $almacen->folio_ubicacion = $request->folio_ubicacion;
            $almacen->zona_qa = $request->zona_qa;
            $almacen->rack_qa = $request->rack_qa;
            $almacen->nivel_qa = $request->nivel_qa;
            $almacen->localidad_qa = $request->localidad_qa;
            $almacen->nombre = $request->nombre;
            $almacen-> save();
            
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'Error'
            ]);
        }
    }

    public function eliminarAlmacen($id){
        try{
            $almacen = Almacen::destroy($id);
            return response([
                "status" => 200,
                "data" => 'Se ha eliminado registro satisfactoriamente'
            ]);

        }   catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'Error'
            ]);
        } 
    }
}
