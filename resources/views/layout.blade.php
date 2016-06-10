<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/css/home.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  @yield('mis_css')

  <link rel="stylesheet" href="{{ URL::to('/') }}/css/registerDoctor.css" type="text/css">
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand visible-xs-*" href="http://localhost:8000">Look For The Doctor</a>
      </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#" id="signIn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrarme<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::to('/') }}/registro/medico">Médico</a></li>
            <li><a href="{{ URL::to('/') }}/registro/centroMedico">Centro Médico</a></li>
            <li><a href="{{ URL::to('/') }}/registro/paciente">No soy Médico</a></li>
          </ul>
        </li>
        <li><a href="{{ URL::to('/') }}/login"id="signUp">Iniciar sesión</a></li>
        <li class="dropdown">
          <li role="separator" class="divider"></li>
          <li role="separator" class="divider"></li>
      </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>

  @yield('content')

  @yield('footer')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
  </body>
</html>
