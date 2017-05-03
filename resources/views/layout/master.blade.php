<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

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
        @yield('contenido')
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
