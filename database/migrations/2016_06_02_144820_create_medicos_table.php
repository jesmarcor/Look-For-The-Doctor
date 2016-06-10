<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('codigoPostal');
            $table->string('email');
            $table->string('ciudad');
            $table->string('especialidad');
            $table->string('centroMedico')->nullable();
            $table->integer('valoracion')->nullable();
            $table->longText('comentarios')->nullable();
            $table->string('telefono');
            $table->string('imagen')->nullable();
            $table->enum('sexo', array('hombre','mujer'));
            $table->string('numeroDeColegiado');
            $table->longText('sobreMi')->nullable();
            $table->string('paginaWeb')->nullable();
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
        Schema::drop('medicos');
    }
}
