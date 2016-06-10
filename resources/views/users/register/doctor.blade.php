@extends ('layout')

@section ('mis_css')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/registerDoctor.css" type="text/css">

@stop

@section ('title')

Registro de Médicos

@stop

@section ('content')
<div class="container">
  <div class="col-lg-offset-4 col-lg-4">
    <h3>Regístrese gratis</h3>
    <p>Para profesionales de la salud que visitan en una o varias consultas privadas o centros médicos.</p>
  </div>
</div>
<br>
<div class="container">
  <div class="col-lg-offset-4 col-lg-4">
  <form role="form" method="POST" action="/registro/medico" class="">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="surname">Apellidos</label>
      <input type="text" name="apellidos" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="adress">Dirección</label>
      <input type="text" name="direccion" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="zipCode">Código Postal</label>
      <input type="text" name="codigoPostal" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="" id="email">
    </div>
    <div class="form-group">
      <label for="city">Ciudad</label>
      <select class="form-control" name="ciudad">
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
      <label for="department">Especialidad</label>
      <select class="form-control" name="especialidad">
        <option value=""></option>
        <option value="">Alergología</option>
        <option value="">Análisis Clinícos</option>
        <option value="">Anatomía Patológica</option>
        <option value="">Angiología y Cirugía Vascular</option>
        <option value="">Aparato Digestivo</option>
        <option value="">Cardiología</option>
        <option value="">Cirugía Cardiovascular</option>
        <option value="">Cirugía General y del Aparato Digestivo</option>
        <option value="">Cirugía Maxilofacial</option>
        <option value="">Cirugía Pediátrica</option>
        <option value="">Cirugía Plástica y Reparadora</option>
        <option value="">Cirugía Torácica</option>
        <option value="">Citopatología/Citología</option>
        <option value="">Densitometria Osea</option>
        <option value="">Dermatología</option>
        <option value="">Diagnóstico por la Imagen</option>
        <option value="">Ecocardiografía/Ecocardiograma-Doppler</option>
        <option value="">Ecografías</option>
        <option value="">Endocrinología y Nutrición</option>
        <option value="">Endoscopias</option>
        <option value="">Enfermeria</option>
        <option value="">Ergometria</option>
        <option value="">Fisioterapeutas</option>
        <option value="">Hematología y Hemoterapia</option>
        <option value="">Hemodialisis</option>
        <option value="">Holter</option>
        <option value="">Litroticia</option>
        <option value="">Logofiniatria</option>
        <option value="">Mamografias</option>
        <option value="">Medicina Familiar</option>
        <option value="">Medicina Interna</option>
        <option value="">Medicina Nuclear</option>
        <option value="">Microbiología</option>
        <option value="">Nefrología</option>
        <option value="">Neumología</option>
        <option value="">Neurocirugía</option>
        <option value="">Neurofisiología Cliníca</option>
        <option value="">Neurología</option>
        <option value="">Obstetricia y Ginecología</option>
        <option value="">Odontología</option>
        <option value="">Oftalmología</option>
        <option value="">Oncología Médica</option>
        <option value="">Oncología Radioterápica</option>
        <option value="">Ortopantomografias</option>
        <option value="">Otorrinonaringología</option>
        <option value="">Pediatría</option>
        <option value="">Podología</option>
        <option value="">Polisomnografías</option>
        <option value="">Psiquiatría</option>
        <option value="">Radiologia</option>
        <option value="">Rehabilitación y Fisioterapeutas</option>
        <option value="">Reumatología</option>
        <option value="">Traumatología</option>
        <option value="">Urología</option>
      </select>
    </div>
    <div class="form-group">
      <label for="medicalCenter">Centro Médico</label>
      <input type="text" name="centroMedico"class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Telefóno</label>
      <input type="text" name="telefono" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="numberOfReference">Número de colegiado</label>
      <input type="text" name="numeroDeColegiado" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="pic">Imagen</label>
      <input type="text" name="imagen" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="webpPage">Página Web</label>
      <input type="text" name="paginaWeb" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="aboutMe">Sobre mí</label>
      <textarea class="form-control" name="sobreMi" rows="2" cols="2" id="comment"></textarea>
    </div>
    <div class="form-group">
      <label for="">Sexo</label>
    </div>
    <div class="form-group">
      <label class="radio-inline">
        <input type="radio" name="sexo" value="hombre">Hombre
      </label>
      <label class="radio-inline">
        <input type="radio" name="sexo" value="mujer">Mujer
      </label>
    </div>
    <br>
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
