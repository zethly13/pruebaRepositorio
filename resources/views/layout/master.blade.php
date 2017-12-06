<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,shrink-to-fit=no, minimum-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="/css/bootstrap.css" rel="stylesheet">
   <link href="/css/font-awesome.css" rel="stylesheet">
  <link href="/css/estiloPropio.css" rel="stylesheet">
  <link href="/css/dashboard.css" rel="stylesheet">
   <link href="/css/navbar.css" rel="stylesheet">
  <title>FCE-UMSS</title>
</head>
<body>
<!--cabecera d la pagina-->
  <header class="cabecera subhead" id="overview">
  <div class="container">
  <div class="row">
    <div class="d-none d-md-block col-md-2 col-lg-2">
    <img src=" /img/logo_umss.png" class="rounded float-left" width="90" height="100">
    </div>
    <div class="col-md-10 col-lg-8">
    <h1>TITULACIÓN FCE UMSS SAMTE</h1>
     <a class="navbar-brand" href="#"><p>Facultad de ciencias economicas</p></a>
    </div>
    <div class="d-none d-lg-block col-lg-2">
      <img src="/img/logoFCE.png" class="rounded float-right" width="110" height="90">
    </div>
  </div>
  </div>
</header>
<!--menu navegaciones-->
  @include('layout.navegacion')
  
        <div class="col-sm-9 col-md-10">
        @yield('contenido')
      </div>
    </div>
  </div>

<!--pie de pagina-->
</body>
<footer class="footer" style="margin-top: 196px;">
        <p>facultad de Ciencias Económicas</p>
        <p>Direccion calle Calama Este - Edificio Prototipo </p>
        <p>Fono: 591-4-4540261 Correo Electrónico: info@fce.umss.edu.bo Cochabamba - Bolivia</p>
</footer>
<!--scripts-->
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/dinamico.js"></script>
<script src="/js/tati.js"></script>

</html>
