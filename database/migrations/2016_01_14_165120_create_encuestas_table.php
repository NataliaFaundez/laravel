<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('validador_id');
            $table->integer('folio_a');
            $table->integer('folio_b');
            $table->string('rut_encuestador');
            $table->integer('region');
            $table->string('direccion');
            $table->integer('numero');
            $table->string('block');
            $table->string('departamento');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('contacto1');
            $table->string('contacto2');
            $table->integer('ingreso');
            $table->integer('observacion')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encuestas');
    }
}
