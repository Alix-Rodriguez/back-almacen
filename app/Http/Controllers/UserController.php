<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class UserController extends Controller
{
    public function register(Request $request){
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed'
            ]);
            $user = new User();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> password = Hash::make($request->password);
            $user -> remember_check = $request -> remember_check;
            $user -> save();
            return response([
                "status" => 201,
                "msn" => 'El usuario se ha creado satisfactoriamente'
            ]);
        }catch(Exception $e){
            return response([
                "status" => 400,
                "msn" => 'El usuario no se ha creado - Error'
            ]);
        }
    }
    public function login(Request $request){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = User::where("email", "=", $request->email)->first();
            if(isset($user->id) ){
                if(hash::check($request->password, $user->password)){
                    //crear el token
                    $token = $user->createToken("auth_token")->plainTextToken;
                }else{
                    return response([
                        "status" => 404,
                        "msn" => 'La password es incorrecta - Error'
                    ]);
                }
            }else{
                return response([
                    "status" => 404,
                    "msn" => 'El usuario no se ha creado - Error'
                ]);
            }
            return response([
                "status" => 200,
                "msn" => 'El usuario se ha logueado satisfactoriamente',
                "access_token" => $token
            ]);
    }
    public function profile() {
        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->User()
        ]); 
    }

    public function logout() {
        auth()->user()->tokens()->delete();
        
        return response()->json([
            "status" => 1,
            "msg" => "Cierre de Sesión",            
        ]); 
    }
}
