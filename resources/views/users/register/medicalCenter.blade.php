@extends ('layout')

@section ('title')

Registro de Centros Médicos

@stop

@section ('content')

<div class="container">
  <div class="col-lg-4 col-lg-offset-4">
    <h3>Regístrese gratis</h3>
    <p>Para responsables de hospital, clínica, centro de diagnóstico o consulta de uno o varios especialistas con nombre comercial.</p>
  </div>
</div>
<div class="container">
  <div class="col-lg-4 col-lg-offset-4">
  <form role="form" method="POST" class="" action="">
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" value="" id="name">
    </div>
    <div class="form-group">
      <label for="adress">Dirección</label>
      <input type="text" class="form-control" value="" id="adress">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" value="" id="email">
    </div>
    <div class="form-group">
      <label for="zipCode">Código Postal</label>
      <input type="text" class="form-control" value="" id="zipCode">
    </div>
    <div class="form-group">
      <label for="city">Ciudad</label>
      <select class="form-control" name="">
        <option value=""></option>
        <option value="">A Coruña</option>
        <option value="">Albacete</option>
        <option value="">Alicante</option>
        <option value="">Almería</option>
        <option value="">Barcelona</option>
        <option value="">Bilbao</option>
        <option value="">Burgos</option>
        <option value="">Cáceres</option>
        <option value="">Cádiz</option>
        <option value="">Cartagena</option>
        <option value="">Castellón</option>
        <option value="">Ciudad Real</option>
        <option value="">Córdoba</option>
        <option value="">Cuenca</option>
        <option value="">El Puerto de Santa María</option>
        <option value="">Formentera</option>
        <option value="">Fuerteventura</option>
        <option value="">Gerona</option>
        <option value="">Gijón</option>
        <option value="">Granada</option>
        <option value="">Gran Canaria</option>
        <option value="">Guadalajara</option>
        <option value="">Huelva</option>
        <option value="">Huesca</option>
        <option value="">Ibiza</option>
        <option value="">Jaén</option>
        <option value="">La Gomera</option>
        <option value="">Lanzarote</option>
        <option value="">La Palma</option>
        <option value="">León</option>
        <option value="">Lérida</option>
        <option value="">Logroño</option>
        <option value="">Lugo</option>
        <option value="">Madrid</option>
        <option value="">Málaga</option>
        <option value="">Mallorca</option>
        <option value="">Marbella</option>
        <option value="">Menorca</option>
        <option value="">Mérida</option>
        <option value="">Murcia</option>
        <option value="">Ourense</option>
        <option value="">Oviedo</option>
        <option value="">Palencia</option>
        <option value="">Pamplona</option>
        <option value="">Pontevedra</option>
        <option value="">Salamanca</option>
        <option value="">Santander</option>
        <option value="">Santiago de Compostela</option>
        <option value="">Segovia</option>
        <option value="">Sevilla</option>
        <option value="">Soria</option>
        <option value="">Tarragona</option>
        <option value="">Tenerife</option>
        <option value="">Teruel</option>
        <option value="">Toledo</option>
        <option value="">Valencia</option>
        <option value="">Valladolid</option>
        <option value="">Vigo</option>
        <option value="">Vitoria</option>
        <option value="">Zamora</option>
        <option value="">Zaragoza</option>
      </select>
    </div>
    <div class="form-group">
      <label for="phoneNumber">Telefóno</label>
      <input type="text" class="form-control" value="" id="phoneNumber">
    </div>
    <div class="form-group">
      <label for="numberOfReference">Página web</label>
      <input type="text" class="form-control" value="" id="webpage">
    </div>
    <div class="form-group">
      <label for="pic">Imagen</label>
      <input type="text" class="form-control" value="" id="pic">
    </div>
    <div class="form-group">
      <label for="aboutMe">Descripción</label>
      <textarea class="form-control" rows="2" value="" id="comment"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-block btn btn-success">Enviar</button>
    </div>
  </form>
</div>
</div>

@stop

@section('footer')
  <footer>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 Look For The Doctor S.L</footer>
@stop
