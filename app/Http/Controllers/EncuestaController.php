<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class EncuestaController extends Controller
{

    public function GetGuardar(Request $request){

    	
    	 $validator = Validator::make($request->all(), [
            'folio_a'=>'required|numeric',
            'folio_b'=>'required|digits',
            'rut_encuestador'  =>'required',
            'direccion'  =>'required|alpha',
            'numero'  =>'required|numeric',
            'block'  =>'required',
            'departamento'  =>'required',
            'telefono'  =>'required|numeric',
            'celular'  =>'required|numeric',
            'contacto1'  =>'required|alpha',
            'contacto2'  =>'required|alpha',
            
        ]);
    
        if ($validator->fails())
        {
            return view('encuesta.add', ["errors" => $validator->errors()->all()]);
        }

        return "ok";
       

    }

}
