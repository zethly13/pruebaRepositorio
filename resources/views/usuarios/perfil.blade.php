
@extends('layout.master')
@section('contenido') 


 <div class="panel panel-default">  
  <div class="panel-heading "><center>INFORMACION BIOGRAFICA DE USUARIO</center></div>
    <div class="panel-body">
    	<div class="container-fluid">
        <div class="row">
    	   <div class="col-md-8">
			       <h4 class="text-uppercase"><b>CI:</b>{{ $usuario->doc_identidad }}</h4>
             <h4 class="text-uppercase"><b>TIPO DE DOCUMENTO:</b> {{ $usuarioInfo->nombre_tipo_doc_identidad }}</h4>
             <h4 class="text-uppercase"><b>DOC EXPEDIDO EN:</b> {{ $usuarioInfo->nombre_ciudad }}</h4>
    		     <h4 class="text-uppercase"><b>NOMBRE COMPLETO:</b>{{ $usuario->nombres }} </h4>
			       <h4 class="text-uppercase"><b>APELLIDOS:</b>{{ $usuario->apellidos }}</h4>
			       <h4 class="text-uppercase"><b>FECHA DE NACIMIENTO:</b> {{ $usuario->fecha_nac }}</h4>
             <h4 class="text-uppercase"><b>PAIS NACIMIENTO:</b>{{ $usuarioPais->nombre_pais }}</h4>
             <h4 class="text-uppercase"><b>CIUDAD NACIMIENTO:</b>{{ $usuarioInfo->nombre_ciudad }}</h4>
             <h4 class="text-uppercase"><b>PROVINCIA NACIMIENTO:</b>{{ $usuarioInfo->nombre_provincia}}</h4>
             <h4 class="text-uppercase"><b>GENERO:</b> {{ $usuario->sexo }}</h4>
             <h4 class="text-uppercase"><b>ESTADO CIVIL:</b>{{ $usuarioInfo->estado_civil }}</h4>
    	   </div>
   		   <div class="col-md-4">
    		 <img src="/img/perfil.jpg" class="img-thumbnail" width="300" height="230">
   		   </div>
   		 </div>
      </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->



<div class="panel panel-default">  
<div class="panel-heading "><center>CORREO USUARIO</center></div>
  <div class="panel-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <h4><b> TIPO DE CORREO:</b></h4>
              @if(!is_null($usuarioEmail))
                <h4 class="text-uppercase">{{ $usuarioEmail->nombre_tipo_email }}</h4>   
              @else
                <h4>SIN TIPO CORRREO</h4>
              @endif              
        </div>
        <div class="col-md-6">
            <h4><b>CORREO ELECTRONICO</b></h4>
              @if(!is_null($usuarioEmail))
                <h4 class="text-uppercase">{{ $usuarioEmail->email }}</h4>   
              @else
                <h4>USUARIO SIN CORREO</h4>
              @endif
        </div>
      </div>
    </div>
  </div><!--cierre panel body-->
</div><!--cierre panel default-->



<div class="panel panel-default">  
<div class="panel-heading "><center>TELEFONO USUARIO</center></div>
<div class="panel-body">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-6">
             <h4><b>TIPO DE TELEFONO:</b></h4>
              @if(!is_null($usuarioTelf))
                <h4>{{ $usuarioTelf->nombre_tipo_telefono }}</h4> 
              @else
                <h4>SIN TIPO TELEFONO</h4>
              @endif    
                         
          </div>
       <div class="col-md-6">
         <h4><b>NRO DE TELEFONO</b></h4>
         <h4>{{ $usuarioTelf->numero_telefono }}</h4>   
         </div>
      </div>
     </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->


<div class="panel panel-default">  
<div class="panel-heading "><center>DIRECCION USUARIO</center></div>
  <div class="panel-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <h4><b>TIPO DE DIRECCION:</b></h4>              
              @if(!is_null($usuarioDir))
                <h4>{{ $usuarioDir->nombre_tipo_direccion }}</h4> 
              @else
                <h4>sin tipo Direccion</h4>
              @endif   
       </div>
       <div class="col-md-6">
         <h4><b>DIRECCION</b></h4>
         @if(!is_null($usuarioDir))
         <h4>{{ $usuarioDir->nombre_direccion }}</h4>   
         @else
           <h4>Usuario sin direccion</h4>
         @endif
         </div>
      </div>
      </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->



<div class="panel panel-default">  
<div class="panel-heading text-center ">ROLES DE USUARIO</div>
  <div class="panel-body">
    <div class="container-fluid">
      <div class="row">
        
      </div>
      </div>
 </div><!--cierre panel body-->
</div><!--cierre panel default-->

@endsection