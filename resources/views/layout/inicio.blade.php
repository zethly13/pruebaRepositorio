<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.css" >
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" >
  <link rel="stylesheet" href="/css/estiloPropio.css" >
   <link rel="stylesheet" href="/css/login.css" >
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>FCE-UMSS</title>
</head>

<body>
<!--cabecera d la pagina-->
<header class="cabecera subhead" id="overview">
  <div class="container">
  <div class="row">
    <div class="col-md-2">
    <p>logoooo</p>
    </div>
    <div class="col-md-10">
    <h1>TITULACIÓN FCE UMSS SAMTE</h1>
     <a class="navbar-brand" href="#"><p>Facultad de ciencias economicas</p></a>
    </div>
  </div>
  </div>
</header>
<!--Cuerpo-->
<div class="cuerpo">
<!--menu navegacion-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/login">LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li class="nav navbar-inverse"><a href="{{ route('usuarios.login') }}">LOGIN</a></li>  
        @else
          <li  role="MENU">
            <ul>
              <span class="caret"></span>
              <li>{{ Auth::user()->apellidos.' '.Auth::user()->nombres }}</li>
              <li><a href="{{ route('usuarios.logout') }}">SALIR</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav> 
<!--seccion a cambiar-->
  @yield('contenido')
<!--pie de pagina-->

</div>
<!-- Footer -->
<footer class="text-center">
  <p>facultad de Ciencias Económicas</p>
        <p>Direccion calle Calama Este - Edificio Prototipo Fono: 591-4-4540261 Correo Electrónico: info@fce.umss.edu.bo Cochabamba - Bolivia</p>
</footer>

<!--scripts-->
<script src="/js/jquery.js"></script>
<script src="/js/dinamico.js"></script>
<script src="/js/bootstrap.js"></script>

</body>
</html>


