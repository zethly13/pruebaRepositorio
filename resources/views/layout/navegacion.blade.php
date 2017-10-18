<!--menu navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-form navbar-right" >
        <!-- Authentication Links -->
         @if (Auth::guest())
            <li class="nav navbar-inverse"><a href="{{ route('usuarios.login') }}">Login</a></li>  
         @else
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nombre_completo }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="{{ route('usuarios.perfil') }}">Perfil</a></li>
            <li><a href="{{ route('usuarios.logout') }}">Salir del Sistema</a></li>
          </ul>
            </li>
        <ul class="nav navbar-nav navbar-form navbar-left" >
          @foreach($acceso as $accesos)
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $accesos->nombre_acceso }}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($subAccesosUsuario as $subAccesos)
                  @if($subAccesos->id_acceso == $accesos->id)
                    <li><a href="{{ route('usuarios.logout') }}">{{ $subAccesos->nombre_sub_acceso }}</a></li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endforeach

        </ul>
                    
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
