<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
}
