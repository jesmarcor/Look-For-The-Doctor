<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nombre','apellidos','direccion','codigoPostal','email','ciudad','especialidad','centroMedico','valoracion','comentarios','telefono','imagen','sexo','numeroDeColegiado','sobreMi','paginaWeb'];
}
