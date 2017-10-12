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
    <!--submenu navegacion-->
    <div class="row">
      <div class="col-md-3">
        <div class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
          <li><a href="/usuarios/create"><span class="glyphicon glyphicon-user"></span> Crear Usuario</a></li><br>
          <li><a href="/roles/create"><span class="glyphicon glyphicon-list"></span> crear rol</a></li><br>          
          <li><a href="/sub_roles/create"><span class="glyphicon glyphicon-user"></span> Crear sub-rol</a></li>
        </ul>
        </div>
      </div>
