@extends ('layout')

@section('mis_css')
  <link rel="stylesheet" href="{{ URL::to('/') }}/css/login.css">
@stop

@section ('title')

Inicio de Sesión

@stop

@section ('content')
<div class="container">
  <div class="col-lg-offset-4 col-lg-4" id="login">
  <form class="form-signin" method="POST">
    <div class="col-lg-offset-4">
    <h3 class="form-signin-heading">Iniciar Sesión</h3>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="sr-only">Correo</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
    </div>
    <div class="form-group">
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="">
    </div>
    <div class="checkbox">
      <label>
      <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <button class="btn btn-block btn-success" type="submit">Iniciar Sesión</button>
  </form>
  </div>
</div>
<script src="{{ URL::to('/') }}/js/ie10-viewport-bug-workaround.js"></script>
@stop
