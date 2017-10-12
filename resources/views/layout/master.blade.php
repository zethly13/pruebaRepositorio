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

<!--cuerpo-->
    <!--menu navegaciones-->
        @include('layout.navegacion')

    <!--seccion a cambiar-->
        <div class="col-md-9">
            @yield('contenido')
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
