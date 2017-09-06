<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.css" >
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" >
  <link rel="stylesheet" href="/css/estiloPropio.css" >
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
<!--menu navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <!-- Authentication Links -->
           @if (Auth::guest())
                <li class="nav navbar-inverse"><a href="{{ route('usuarios.login') }}">Login</a></li>  
           @else
                <li  role="menu">
                  <ul>
                    <li>{{ Auth::user()->apellidos.' '.Auth::user()->nombres }}</li>
                    <li>{{ Auth::user()->nombre_completo }}</li>

                    <li><a href="{{ route('usuarios.logout') }}">salir</a></li>
                  </ul>
                  </li>
           @endif
      </ul>
    </div>
  </div>
</nav>

 <!--contenido-->
<div class="container">
    <div class="row">
    <!--submenu navegacion-->
      <div class="col-md-3">

        <div class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
          <li><a href="/usuarios/create"><span class="glyphicon glyphicon-user"></span> Crear Usuario</a></li><br>
          <li><a href="/roles/create"><span class="glyphicon glyphicon-list"></span> crear rol</a></li><br>          
          <li><a href="/sub_roles/create"><span class="glyphicon glyphicon-user"></span> Crear sub-rol</a></li>
        </ul>
        </div>
      </div>

    <!--seccion a cambiar-->
        <div class="col-sm-9">
            <section>
                <div>
                     @yield('contenido')
                 </div>
            </section>
        </div>
    </div>
</div>
<!--pie de pagina-->
<footer class="footer">
    <div class="container">
        <p>facultad de Ciencias Económicas</p>
        <p>Direccion calle Calama Este - Edificio Prototipo </p>
        <p>Fono: 591-4-4540261 Correo Electrónico: info@fce.umss.edu.bo Cochabamba - Bolivia</p>
    </div>
</footer>

<!--scripts-->
<script src="/js/jquery.js"></script>
<script src="/js/dinamico.js"></script>
<script src="/js/bootstrap.js"></script>

</body>
</html>
