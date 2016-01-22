
@extends('layouts.app')

@section('content')
 
<table class="table table-bordered">
    <thead>
        <tr>
            <th>folio</th>
            <th>validador</th>
            <th>encuestador</th>
            <th>region</th>
            <th>accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($encuestas as $encuesta)
            <tr>
                <td> {{ $encuesta->folio_a."-".$encuesta->folio_b  }} </td>
                <td> {{ $encuesta->validador_id }} </td>
                <td> {{ $encuesta->rut_encuestador }} </td>
                <td> {{ $encuesta->region }} </td>                
                <td>
                    <button class="btn btn-success" >Mostrar <span class="glyphicon glyphicon-eye-open"></span></button>
                    <button class="btn btn-warning">Editar<span class="glyphicon glyphicon-pencil"></span></button>
                    <button class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-remove"></span> </button> 
                </td>                
            </tr>
        @endforeach
    </tbody>

</table>

 @endsection
