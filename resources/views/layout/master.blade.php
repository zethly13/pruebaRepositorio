<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
   <!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/css/estiloPropio.css" rel="stylesheet">
    
    <title>FCE-UMSS</title>
</head>

<body>
<!--cabecera d la pagina-->
<header class="cabecera subhead" id="overview">
  <div class="container">
    <h1>TITULACIÓN FCE UMSS</h1>
     <a class="navbar-brand" href="{{ url('') }}"><p>Facultad de ciencias economicas</p></a>
  </div>
</header>

<!--Cuerpo-->
<!--menu navegacion-->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="navbar navbar-nav">
          <li><a href="">Inicio</a></li>
          <li><a href="#">noticias</a></li>          
          <li><a href="#">Ingresar al sistema</a></li>
        </ul>
  </div>
</nav>

 <!--contenido-->
<div class="container">
   
    <div class="row">
    <!--submenu navegacion-->
      <div class="span2">
        <ul>
          <li><a href="">Inicio</a></li>
          <li><a href="#">noticias</a></li>          
          <li><a href="#">Ingresar al sistema</a></li>
        </ul>
      </div>
    <!--seccion a cambiar-->
        <div class="span10">
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
        <p>Fono: 591-4-4540261
        Correo Electrónico: info@fce.umss.edu.bo
        Cochabamba - Bolivia</p>
    </div>
</footer>

<!--scripts-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.js"></script>
</body>
</html>
