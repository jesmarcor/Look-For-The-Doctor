@extends ('layout')

@section ('title')

Registro de Médicos

@stop

@section ('content')
<div class="container">
<div class="col-lg-offset-4 col-lg-4">
  <h3>Regístrese gratis</h3>
  <p>El registro en Look For The Doctor es gratis! Regístrate con Facebook o con tu email.</p>
</div>
</div>
<div class="container">
<div class="col-lg-offset-4 col-lg-4">
  <form role="form" class="" action="" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="" id="email">
    </div>
    <div class="form-group">
      <label for="pic">Contraseña</label>
      <input type="text" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="pic">Repetir Contraseña</label>
      <input type="text" class="form-control" id="">
    </div>
    <br>
    <div class="form-group">
      <button type="submit" class="btn btn-block btn btn-success">Enviar</button>
    </div>
  </form>
</div>
</div>
@stop
