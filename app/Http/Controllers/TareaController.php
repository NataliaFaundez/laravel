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
    	return view('tarea');
    }

    public function formPost(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre'        =>'required|',//debe ser palabras, nunca numero o otro
            'personaje'        =>'required|',
            'prioridadoperacion' =>'required|numeric'
        ]);

        if ($validator->fails())
        {
            return view('tarea', ["errors" => $validator->errors()->all()]);
        }
       
        $prioridad = $request->input("prioridad");
        $nombre= $request->input("nombre");
        $personaje= $request->input("personaje");


        if($operacion=='add'){
            return view('tarea', ['result'=>$n1 + $n2]);   //result debe mostrar la tabla
        }
        if($operacion=='rest'){
            return view('tarea', ['result'=>$n1 - $n2]);   //result debe mostrar la tabla
        }
        if($operacion=='cambio'){
            return view('tarea', ['result'=>$n1 * $n2]); //result debe mostrar la tabla  
        }
        
        
        return view("error", [ "mensaje" => "esta malo" ]);            
    }
    
}
