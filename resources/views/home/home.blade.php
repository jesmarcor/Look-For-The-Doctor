@extends ('layout')

@section ('title')
  Look For The Doctor
@stop

@section ('content')

      <div class="container-fluid">
        <form class="form-inline ppal">
          <img src="images/Equipomedicos.jpg" alt="Look for The Doctor" class="img-responsive">
          <div class="container" id="search">
          <h1 class="align-center">Elige tu médico y consulta las opiniones.</h1>
          <input id="medico" type="text" class="form-control" placeholder="  Busca por nombre, especialidad, ciudad..." aria-describedby="sizing-addon1">
          <button type="submit" id="boton" class="btn btn-success">Buscar</button>
          </div>
        </form>
      </div>
@stop

@section('footer')
  <footer>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 Look For The Doctor S.L</footer>
@stop
