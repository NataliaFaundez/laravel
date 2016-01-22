
@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">     
        <dl class="dl-horizontal">
            <dt>Folio</dt>
            <dd>{{ $encuesta->folio_a."-".$encuesta->folio_b}}</dd>
            <dt>Validador</dt>
            <dd>{{ $encuesta->validador_id}}</dd>
            <dt>Rut encuestador</dt>
            <dd>{{ $encuesta->rut_encuestador}}</dd>
            <dt>Region</dt>
            <dd>{{ $encuesta->region}}</dd>
            <dt>Direccion</dt>
            <dd>{{ $encuesta->direccion."-".$encuesta-> numero}}</dd>
            <dt>Block</dt>
            <dd>{{ $encuesta->block}}</dd>
            <dt>Departamento</dt>
            <dd>{{ $encuesta->departamento}}</dd>
            <dt>Telefono</dt>
            <dd>{{ $encuesta->telefono}}</dd>
            <dt>Celular</dt>
            <dd>{{ $encuesta->celular}}</dd>
            <dt>Contacto 1</dt>
            <dd>{{ $encuesta->contacto1}}</dd>
            <dt>Contacto 2</dt>
            <dd>{{ $encuesta->contacto2}}</dd>
            <dt>Ingreso</dt>
            <dd>{{ $encuesta->ingreso}}</dd>
            <dt>Observacion</dt>
            <dd>{{ $encuesta->observacion}}</dd>
        </dl>
    </div>
</div>

@endsection
