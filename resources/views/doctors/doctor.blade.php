@extends ('layout')

@section ('title')
  Lista Medicos
@stop

@section ('content')
<div class="container">
  <div class="row">
  <div class="col-lg-2">
    <img src="http://placehold.it/150x150"> {{ $medico->imagen }}
  </div>
  <div class="col-lg-7">
      <h3>
        <a href="{{ URL::to('/') }}/listaMedicos/{{ $medico->id }}">
      @if( $medico->sexo == 'Hombre')
        Dr.
      @else
        Dra.
      @endif
      &nbsp;{{ $medico->nombre }} {{ $medico->apellidos }}</a></h3>
      <p>{{ $medico->especialidad}}</p>
      <p>Numero de Colegiado: {{ $medico->numeroDeColegiado}}</p>
      <p> {{ $medico->direccion }} </p>
      <p>{{ $medico->codigoPostal }}, {{ $medico->ciudad}} </p>
      <p>Centro Medico: {{ $medico->centroMedico}} </p>
      <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $medico->telefono }} </p>
      <p>Email: {{ $medico->email }}</p>
      <p>Sobre Mi: {{ $medico->sobreMi}}</p>
      <p>Comentarios: {{ $medico->comentarios}}</p>
      <p>Pagina Web: {{ $medico->paginaWeb}}</p>
    </div>
    <div class="col-lg-3">
      <p><a href="">Añadir a Favoritos</a></p>
      @for($i = 0; $i < $medico->valoracion; $i++)
      <i class="fa fa-star" aria-hidden="true"></i>
      @endfor
    </div>
  </div>
</div>

@stop
