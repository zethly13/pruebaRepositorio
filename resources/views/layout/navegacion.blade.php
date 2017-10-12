<!--menu navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
<<<<<<< HEAD
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
					@foreach($subAccesosUsuario as $accesos)
					<li role="presentation" class="dropdown">
           		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $accesos->nombre_acceso }}<span class="caret"></span></a>
    				<ul class="dropdown-menu">
						@foreach($subAccesosUsuario as $subAccesos)
							@if($subAccesos->id_sub_acceso==$accesos->id_acceso)
						 	<li><a href="{{ route('usuarios.logout') }}">{{ $subAccesos->nombre_sub_acceso }}</a></li>
						 	@endif
						@endforeach
   				</ul>
            	</li>
					@endforeach

	     		</ul>
      			        
         @endif  
=======
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
           
>>>>>>> e24dc089c55e348df818a7c8723ca9973d497598
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
