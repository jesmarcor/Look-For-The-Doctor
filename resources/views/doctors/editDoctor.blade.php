@extends ('layout')

@section ('mis_css')

<link rel="stylesheet" href="{{ URL::to('/') }}/css/registerDoctor.css" type="text/css">

@stop

@section ('title')

Editar Médicos {{ $medico->id }}

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
  <form role="form" method="POST" action="/listaMedicos/{{ $medico->id }}">
    {{ method_field('PATCH') }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" name="nombre" value="{{ $medico->nombre }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="surname">Apellidos</label>
      <input type="text" name="apellidos" value="{{ $medico->apellidos }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="adress">Dirección</label>
      <input type="text" name="direccion" value="{{ $medico->direccion }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="zipCode">Código Postal</label>
      <input type="text" name="codigoPostal" value="{{ $medico->codigoPostal }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" value="{{ $medico->email }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="city">Ciudad</label>
      <select class="form-control" value="{{ $medico->ciudad }}" name="ciudad">
        <option value=""></option>
        <option value="A Coruña">A Coruña</option>
        <option value="Albacete">Albacete</option>
        <option value="Alicante">Alicante</option>
        <option value="Almería">Almería</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Bilbao">Bilbao</option>
        <option value="Burgos">Burgos</option>
        <option value="Cáceres">Cáceres</option>
        <option value="Cádiz">Cádiz</option>
        <option value="Cartagena">Cartagena</option>
        <option value="Castellón">Castellón</option>
        <option value="Ciudad Real">Ciudad Real</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Cuenca">Cuenca</option>
        <option value="El Puerto de Santa María">El Puerto de Santa María</option>
        <option value="Formentera">Formentera</option>
        <option value="Fuerteventura">Fuerteventura</option>
        <option value="Gerona">Gerona</option>
        <option value="Gijón">Gijón</option>
        <option value="Granada">Granada</option>
        <option value="Gran Canaria">Gran Canaria</option>
        <option value="Guadalajara">Guadalajara</option>
        <option value="Huelva">Huelva</option>
        <option value="Huesca">Huesca</option>
        <option value="Ibiza">Ibiza</option>
        <option value="Jaén">Jaén</option>
        <option value="La Gomera">La Gomera</option>
        <option value="Lanzarote">Lanzarote</option>
        <option value="La Palma">La Palma</option>
        <option value="León">León</option>
        <option value="Lérida">Lérida</option>
        <option value="Logroño">Logroño</option>
        <option value="Lugo">Lugo</option>
        <option value="Madrid">Madrid</option>
        <option value="Málaga">Málaga</option>
        <option value="Mallorca">Mallorca</option>
        <option value="Marbella">Marbella</option>
        <option value="Menorca">Menorca</option>
        <option value="Mérida">Mérida</option>
        <option value="Murcia">Murcia</option>
        <option value="Ourense">Ourense</option>
        <option value="Oviedo">Oviedo</option>
        <option value="Palencia">Palencia</option>
        <option value="Pamplona">Pamplona</option>
        <option value="Pontevedra">Pontevedra</option>
        <option value="Salamanca">Salamanca</option>
        <option value="Santander">Santander</option>
        <option value="Santiago de Compostela">Santiago de Compostela</option>
        <option value="Segovia">Segovia</option>
        <option value="Sevilla" <?php if($medico->ciudad=="Sevilla") echo "selected"; ?>>Sevilla</option>
        <option value="Soria">Soria</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Tenerife">Tenerife</option>
        <option value="Teruel">Teruel</option>
        <option value="Toledo">Toledo</option>
        <option value="Valencia">Valencia</option>
        <option value="Valladolid">Valladolid</option>
        <option value="Vigo">Vigo</option>
        <option value="Vitoria">Vitoria</option>
        <option value="Zamora">Zamora</option>
        <option value="Zaragoza">Zaragoza</option>
      </select>
    </div>
    <div class="form-group">
      <label for="department">Especialidad</label>
      <select class="form-control" value="{{ $medico->especialidad }}" name="especialidad">
        <option value=""></option>
        <option value="Alergología">Alergología</option>
        <option value="Análisis Clinícos">Análisis Clinícos</option>
        <option value="Anatomía Patológica">Anatomía Patológica</option>
        <option value="Angiología y Cirugía Vascular">Angiología y Cirugía Vascular</option>
        <option value="Aparato Digestivo">Aparato Digestivo</option>
        <option value="Cardiología">Cardiología</option>
        <option value="Cirugía Cardiovascular">Cirugía Cardiovascular</option>
        <option value="Cirugía General y del Aparato Digestivo">Cirugía General y del Aparato Digestivo</option>
        <option value="Cirugía Maxilofacial">Cirugía Maxilofacial</option>
        <option value="Cirugía Pediátrica">Cirugía Pediátrica</option>
        <option value="Cirugía Plástica y Reparadora">Cirugía Plástica y Reparadora</option>
        <option value="Cirugía Torácica">Cirugía Torácica</option>
        <option value="Citopatología/Citología">Citopatología/Citología</option>
        <option value="Densitometria Osea">Densitometria Osea</option>
        <option value="Dermatología">Dermatología</option>
        <option value="Diagnóstico por la Imagen">Diagnóstico por la Imagen</option>
        <option value="Ecocardiografía/Ecocardiograma-Doppler">Ecocardiografía/Ecocardiograma-Doppler</option>
        <option value="Ecografías">Ecografías</option>
        <option value="Endocrinología y Nutrición">Endocrinología y Nutrición</option>
        <option value="Endoscopias">Endoscopias</option>
        <option value="Enfermeria">Enfermeria</option>
        <option value="Ergometria">Ergometria</option>
        <option value="Fisioterapeutas">Fisioterapeutas</option>
        <option value="Hematología y Hemoterapia">Hematología y Hemoterapia</option>
        <option value="Hemodialisis">Hemodialisis</option>
        <option value="Holter">Holter</option>
        <option value="Litroticia">Litroticia</option>
        <option value="Logofiniatria">Logofiniatria</option>
        <option value="Mamografias">Mamografias</option>
        <option value="Medicina Familiar">Medicina Familiar</option>
        <option value="Medicina Interna<">Medicina Interna</option>
        <option value="Medicina Nuclear">Medicina Nuclear</option>
        <option value="Microbiología">Microbiología</option>
        <option value="Nefrología">Nefrología</option>
        <option value="Neumología">Neumología</option>
        <option value="Neurocirugía">Neurocirugía</option>
        <option value="Neurofisiología Cliníca">Neurofisiología Cliníca</option>
        <option value="Neurología">Neurología</option>
        <option value="Obstetricia y Ginecología">Obstetricia y Ginecología</option>
        <option value="Odontología">Odontología</option>
        <option value="Oftalmología">Oftalmología</option>
        <option value="Oncología Médica">Oncología Médica</option>
        <option value="Oncología Radioterápica">Oncología Radioterápica</option>
        <option value="Ortopantomografias">Ortopantomografias</option>
        <option value="Otorrinonaringología">Otorrinonaringología</option>
        <option value="Pediatría">Pediatría</option>
        <option value="Podología">Podología</option>
        <option value="Polisomnografías">Polisomnografías</option>
        <option value="Psiquiatría">Psiquiatría</option>
        <option value="Radiologia">Radiologia</option>
        <option value="Rehabilitación y Fisioterapeutas">Rehabilitación y Fisioterapeutas</option>
        <option value="Reumatología">Reumatología</option>
        <option value="Traumatología">Traumatología</option>
        <option value="Urología">Urología</option>
      </select>
    </div>
    <div class="form-group">
      <label for="medicalCenter">Centro Médico</label>
      <input type="text" value="{{ $medico->centroMedico }}" name="centroMedico"class="form-control">
    </div>
    <div class="form-group">
      <label for="phoneNumber">Telefóno</label>
      <input type="text" value="{{ $medico->telefono }}" name="telefono" class="form-control">
    </div>
    <div class="form-group">
      <label for="numberOfReference">Número de colegiado</label>
      <input type="text" value="{{ $medico->numeroDeColegiado }}" name="numeroDeColegiado" class="form-control">
    </div>
    <div class="form-group">
      <label for="pic">Imagen</label>
      <input type="text" value="{{ $medico->imagen }}" name="imagen" class="form-control">
    </div>
    <div class="form-group">
      <label for="webpPage">Página Web</label>
      <input type="text" value="{{ $medico->paginaWeb }}" name="paginaWeb" class="form-control">
    </div>
    <div class="form-group">
      <label for="aboutMe">Sobre mí</label>
      <textarea class="form-control" value="{{ $medico->sobreMi }}" name="sobreMi" rows="2" cols="2"></textarea>
    </div>
    <div class="form-group">
      <label for="">Sexo</label>
    </div>
    <div class="form-group">
      <label class="radio-inline">
        <input type="radio" name="sexo" value="hombre" <?php if($medico->sexo == "Hombre") echo "checked"; ?>> Hombre
      </label>
      <label class="radio-inline">
        <input type="radio" name="sexo" value="mujer"<?php if($medico->sexo == "Mujer") echo "checked"; ?>> Mujer
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
