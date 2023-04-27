<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function saveProveedores(Request $request){
        try{
            $proveedor = new Proveedor();
            $proveedor -> empresa = $request ->empresa;
            $proveedor -> nombre_proveedor = $request ->nombre_proveedor;
            $proveedor -> rfn = $request ->rfn;
            $proveedor -> codigo_postal = $request ->codigo_postal;
            $proveedor -> calle = $request ->calle;
            $proveedor -> telefono1 = $request ->telefono1;
            $proveedor -> telefono2 = $request ->telefono2;
            $proveedor -> telefono3 = $request ->telefono3;
            $proveedor -> numero_exterior = $request ->numero_exterior;
            $proveedor -> numero_interior = $request ->numero_interior;
            $proveedor -> colonia = $request ->colonia;
            $proveedor -> delegacion = $request ->delegacion;
            $proveedor -> contacto = $request ->contacto;
            $proveedor -> email = $request ->email;
            $proveedor -> save();

            return response([
                "status" => 200,
                "msn" => 'Se ha guardado satisfactoriamente'
            ]);

        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guardado - Error'
            ]);
        }
    }

    public function listarProveedor(){
        try{

            $proveedor = Proveedor::all();
    
            return response([
                "status" => 200,
                "data" => $proveedor
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => 'No se ha guadardo - error'
            ]);
        }
        
    }

}
