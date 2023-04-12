<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Exception;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function saveEmpresa(Request $request){
        try{
            $empresa = new Empresas();
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->nombre_empresa = $request->direccion_empresa;
            $empresa->nombre_empresa = $request->centro_costo;
            $empresa->nombre_empresa = $request->logo_empresa;
            $empresa->nombre_empresa = $request->nif_empresa;
            $empresa-> save();
    
            return response([
                "status" => 200,
                "msn" => 'Se ha guadardo satisfatoriamente'
            ]);

        }catch (Exception $e){
            return response([
                "status" => 400,
                "msn" => $e
            ]);
        }
        
    }
}
