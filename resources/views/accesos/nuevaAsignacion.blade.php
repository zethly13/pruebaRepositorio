@extends('layout.master')
@section('contenido')
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>Doc Identidad</th>
			<th>usuario</th>
			<th>Sub-Roles Asignados</th>
			<th>Añadir Nuevo Sub-Rol</th>
		</tr>
	</thead>
	<tbody>
			@foreach($permisosAsignados as $permisos)
				<tr>
				<td>Rol: {{ $permisos->sub_rol->rol->nombre_rol }}<br>
				Sub-Rol: {{ $permisos->sub_rol->nombre_sub_rol	 }}<br>
				Unidad: {{ $permisos->unidad->nombre_unidad	 }}<br>
				Funcion: {{ $permisos->funcion->nombre_funcion	 }}<br>
				Periodo: desde {{ $permisos->fecha_inicio	 }} hasta {{ $permisos->fecha_fin	 }} <br>
				Activo: {{ $permisos->activo	 }}</td>
				</tr>
				
			@endforeach
	</tbody>
</table>
<h3 align="center">FORMULARIO DE ASIGNACION DE NUEVO SUB-ROL A UN USUARIO</h3>
{!! Form::open(array('route' => array('accesos.validarNuevaAsignacion',$permisoUsuario->usuario->id), 'method' =>'get'), array('role'=>'form')) !!}
	{!! Form::label('ci','Documento de Identidad') !!}
	{!! Form::label('ci',$permisoUsuario->usuario->doc_identidad ) !!}</br>

	{!! Form::label('nombre','Nombre de Usuario') !!}
	{!! Form::label('nombre',$permisoUsuario->usuario->nombre_completo) !!}</br>
	
    {!! Form::label('subRol','Rol/SubRol') !!}
    {!! Form::select('subRol',$subRol->pluck('rol_sub_rol','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}

	{!! Form::label('funcion','FUNCION') !!}
    {!! Form::select('funcion',$funcion->pluck('nombre_funcion','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}
      
	{!! Form::label('unidad','UNIDAD') !!}
    {!! Form::select('unidad',$unidad->pluck('nombre_unidad','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}

	{!! Form::label('sis','SIS') !!}
	{!! Form::text('sis',null,array('placeholder'=>'CODSIS','class'=>'form-control')) !!}<br>

	<div class="form-group">
          {!! Form::label('fecha_inicio','* Fecha Inicio:',['class'=>'col-md-3']) !!}
          <div class="col-md-9">
            <input name='fecha_inicio' type="date" class="form-control" id="birthday" value="<?php 
                   if(isset($_SESSION["birthday_patient"])) {
                      echo $_SESSION["birthday_patient"];
                   }?>" required>
          </div>          
        </div>
        
	
	<div class="form-group">
          {!! Form::label('fecha_fin','* Fecha FIN:',['class'=>'col-md-3']) !!}
          <div class="col-md-9">
            <input name='fecha fin' type="date" class="form-control" id="birthday" value="<?php 
                   if(isset($_SESSION["birthday_patient"])) {
                      echo $_SESSION["birthday_patient"];
                   }?>" required>
          </div>          
        </div>
    
    {!! Form::label('activo','SUB-GRUPO ACTIVO PARA EL USUARIO') !!}
	{!! Form::select('activo',['SI'=>'SI','NO'=>'NO'],'SI')!!}<br>
	
	{!! Form::button('Asignar Nuevo Sub-Rol', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
{!! Form::close() !!}
@endsection