<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculadoraController extends Controller
{
    //
    public function sumaa(Request $request){
    	if($request->has('n1')&& $request->has ('n2')){
    		$n1= $request->input("n1");
    		$n2= $request->input("n2");
    		return $n1 + $n2;
    	}
    	return "debe ingresar numeros";
    }

    public function operacion(Request $request){
    	if($request->has('n1') && $request->has ('n2') && $request->has('operacion'))
    	{
    		$operacion = $request->input("operacion");
    		$n1= $request->input("n1");
    		$n2= $request->input("n2");
    		if($operacion=='suma'){
    		
    		return $n1 + $n2;	
    		}
    		if($operacion=='resta'){
    		
    		return $n1 - $n2;	
    		}
    		if($operacion=='multiplicacion'){
    		//$n1= $request->input("n1");
    		//$n2= $request->input("n2");
    		return $n1 * $n2;	
    		}
    		if($operacion=='div'){
    		/*$n1= $request->input("n1");
    		$n2= $request->input("n2");*/
    		return round($n1 / $n2, 3)	;	
    		}
    	}
    	return "debe ingresar numeros";
    }

    public function principal(Request $request)
    {
    	
    		if($request->has('n1')&& $request->has ('n2')){
    		$n1= $request->input("n1");
    		$n2= $request->input("n2");

    		return view("calculadora", ['num1'=> $n1, 'num2' =>$n2, 'suma' => $n1 + $n2 ] );

    		}
    	
    		return view("error", [ "mensaje" => "no ingresaste todos los parametros" ]);
	}

    public function formulario(Request $request){
        if($request->has('n1')&& $request->has ('n2')){
            $n1= $request->input("n1");
            $n2= $request->input("n2");
        return view('formulario', ['num1'=> $n1, 'num2' => $n2, 'suma' => $n1 + $n2]);
    }
    return view("error", [ "mensaje" => "no ingresaste todos los parametros" ]);
    }
}


    


