<!--menu navegacion-->
@if (Auth::guest())
    <li class="nav navbar-inverse"><a href="{{ route('usuarios.login') }}">Login</a></li> 
@else
<!--menu toggle-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
<!---->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="dropdown">
          @foreach($acceso as $accesos)
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $accesos->nombre_acceso }}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($subAccesosUsuario as $subAccesos)
                  @if($subAccesos->id_acceso == $accesos->id)
                    <li><a href="{{ route($subAccesos->ruta_sub_acceso) }}">{{ $subAccesos->nombre_sub_acceso }}</a></li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endforeach
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMINISTRACION tati<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/roles">Listar Roles</a></li>
            <li><a href="/roles">Crear Rol</a></li>
            <li class="divider"></li>
            <li><a href="/sub_roles">Listar SubRoles</a></li>
            <li><a href="/sub_roles/create">Crear SubRol</a></li>
            <li class="divider"></li>
            <li><a href="/usuario/acceso">Listar permisos</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li class="nav navbar-inverse"><a href="{{ route('usuarios.login') }}">Login</a></li>
        @else
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->nombre_completo }}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('usuarios.perfil') }}">Perfil Usuario</a></li>
                <li><a href="{{ route('usuarios.loginModificar') }}">Modificar Login</a></li>
                <li><a href="{{ route('usuarios.contrasenaModificar') }}">Modificar Contraseña</a></li>
                <li><a href="{{ route('usuarios.logout') }}">Salir del Sistema</a></li>
          </li>
          @endif
      </ul>

    </div>
  </div>
</nav>
@endif 
<br> 
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
    </div>