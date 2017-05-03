<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">

    <title>proyecto titulacion</title>

</head>
<body>
    <header id="Encabezado">
       <h1><center>Encabezado de la pagina web</center></h1> 
        <div class="navbar-header"
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    TITULACION
                </a>
        </div>
    </header>
    <nav>
        @yield('menus')
    </nav>
    <nav>
       @yield('submenus') 
    </nav>
   
     <section>
       <div class="container">
            @yield('contenido')
       </div>
       
    </section>
     <footer>
        <h1>mi pie de pagina</h1>
       <p>ultad de Ciencias Económicas</p></br>
       <p>nal calle Calama Este - Edificio Prototipo </p></br>
        Fono: 591-4-4540261
        Correo Electrónico: info@fce.umss.edu.bo
        Cochabamba - Bolivia
    </footer>
</body>
</html>
