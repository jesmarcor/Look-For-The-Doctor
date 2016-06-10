@extends ('layout')

@section('mis_css')
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/medicaList.css" media="screen" title="no title" charset="utf-8">
@stop

@section ('title')
  Lista Medicos
@stop

@section ('content')

<div class="container" id="listaMedicos">
  @foreach($medicos as $medico)
  <div class="row">
  <div class="col-lg-1">
    <img src="http://placehold.it/82x82"> {{ $medico->imagen }}
  </div>
  <div class="col-lg-9">
      <h4>
        <a href="{{ URL::to('/') }}/listaMedicos/{{ $medico->id }}">
      @if( $medico->sexo == 'Hombre')
        Dr.
      @else
        Dra.
      @endif
      &nbsp;{{ $medico->nombre }} {{ $medico->apellidos }}</a></h4>
      <p>{{ $medico->especialidad}}</p>
      <p> {{ $medico->direccion }} </p>
      <p>{{ $medico->codigoPostal }}, {{ $medico->ciudad}} </p>
      <p>Centro Medico: {{ $medico->centroMedico}} </p>
      <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $medico->telefono }} </p>
    </div>
    <div class="col-lg-2">
      <p><a href="">Añadir a Favoritos</a></p>
      @for($i = 0; $i < $medico->valoracion; $i++)
      <i class="fa fa-star" aria-hidden="true"></i>
      @endfor
    </div>
    <div class="col-lg-2"><br></div>
    <div class="col-lg-2">
      <a class="btn btn-success" href="{{ URL::to('/') }}/listaMedicos/{{ $medico->id }}/edit" name="editar">Editar</a>
      <a class="btn btn-danger" href="{{ URL::to('/') }}/listaMedicos/{{ $medico->id }}" name="borrar">Borrar</a>
    </div>
    <hr>
  </div>
  @endforeach
</div>

@stop
