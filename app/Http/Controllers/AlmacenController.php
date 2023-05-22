<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AlmacenController extends Controller
{
    public function listarAlmacenes(){
        try{
            $almacen = DB::table('almacens')
            ->leftJoin(
                'empresas','empresas.id',
                '=',
                'almacens.descuento_almacen'
            )
            ->leftJoin(
                'delegacions','delegacions.code_delegacion',
                '=',
                'almacens.delegacion_municipio'
            )
             ->leftJoin(
                 'colonias','colonias.code_colonia',
                 '=',
                 'almacens.colonia'
             )
            ->select(
                'almacens.id',
                'empresas.nombre_empresa as descuento_almacen',
                'almacens.tipo',
                'almacens.picking',
                'almacens.etiqueta_entrada',
                'almacens.usa_zona',
                'almacens.usa_rack',
                'almacens.usa_nivel',
                'almacens.usa_localidad',
                'almacens.schedule',
                'almacens.status',
                'almacens.contacto',
                'almacens.calle',
                'almacens.numero_exterior',
                'almacens.numero_interno',
                'colonias.descripcion as colonia',
                'almacens.cp',
                'delegacions.descripcion as delegacion_municipio',
                'almacens.telefono',
                'almacens.email',
                'almacens.usar_ubicacion',
                'almacens.folio_ubicacion',
                'almacens.zona_qa',
                'almacens.rack_qa',
                'almacens.nivel_qa',
                'almacens.localidad_qa',
                'almacens.nombre'

            )
            ->get();
    
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
