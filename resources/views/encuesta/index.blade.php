
@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
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
                            <a class="btn btn-success" href="/encuestas/{{ $encuesta->id }}">
                                Mostrar 
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <a class="btn btn-warning" href="/encuestas/edit/{{ $encuesta->id }}">
                                Editar
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a class="btn btn-danger" href="/encuestas/eliminar/{{ $encuesta->id }}">
                                Eliminar 
                                <span class="glyphicon glyphicon-remove"></span>
                            </a> 
                        </td>                
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
 @endsection
