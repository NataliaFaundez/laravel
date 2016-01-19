<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //si no se define laravel coloca por defecto el numbre de la tbla en plural
    protected $table = "encuestas";

    protected $fillable = [
        'folio_a', 'folio_b', 'rut_encuestador', 'region', 'direccion', 'numero', 'block', 'departamento', 'telefono', 'celular', 'contacto1', 'contacto2', 'ingreso', 'observacion'
    ];

}
