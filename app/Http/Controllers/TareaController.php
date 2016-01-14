<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TareaController extends Controller
{
    //
    public function GetInicio(Request $request)
    {
    	return view('welcome');
    }

    public function formPost(Request $request){
        $validator = Validator::make($request->all(), [
            'email'        =>'required| email',
            'clave'        =>'required|',
            
        ]);

        if ($validator->fails())
        {
            return view('welcome', ["errors" => $validator->errors()->all()]);
        }
       
        $email = $request->input("email");
        $clave= $request->input("clave");


        if($operacion=='opcion1'){
            return view('tarea', ['result'=>$n1 + $n2]);   //para guarar la opcion correspondiente, guarda contraseña
        }
        if($operacion=='opcion2'){
            return view('tarea', ['result'=>$n1 - $n2]);   //para guarar la opcion correspondiente, recuperar o cambiar contraseña
        }
        if($operacion=='opcion3'){
            return view('tarea', ['result'=>$n1 * $n2]); //para guarar la opcion correspondiente , crea cuenta
        }
        
        
        return view("error", [ "mensaje" => "esta malo" ]);            
    }
    
}
