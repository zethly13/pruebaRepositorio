@extends('layout.master')
@section('contenido')
<div class="panel panel-default">  
  <div class="panel-heading text-center">FORMULARIO DE ASIGNACION DE NUEVO SUB-ROL A UN USUARIO</div>
    <div class="panel-body">
    	<div class="form-horizontal">
				{!! Form::open(array('route' => array('accesos.validarModAsignacion',$permisoUsuario->id), 'method' =>'POST'), array('role'=>'form')) !!}

					{!! Form::label('ci','Documento de Identidad') !!}
					{!! Form::label('ci',$permisoUsuario->usuario->tipo_doc_identidad->nombre_tipo_doc_identidad ) !!}</br>
					{!! Form::label('nombre','Nombre de Usuario') !!}
					{!! Form::label('nombre',$permisoUsuario->usuario->nombre_completo) !!}</br>
					<hr>

					<div class="form-group">
				  	{!! Form::label('subRol','ROL/SUB-ROL:',['class'=>'col-md-2']) !!}
				  	<div class="col-md-10">
				  		
				  		<select name="subRol" class="form-control">
								<option value={{$permisoUsuario->sub_rol->id}}>{{$permisoUsuario->sub_rol->RolSubRol}}</option>	
										@foreach ($subRol as $subRoles)	
											<option value="{{$subRoles->id}}">{{$subRoles->RolSubRol}}</option>
										@endforeach
							</select>
							{{--
				  	{!! form::select('subRol',$subRol,$permisoUsuario->id_sub_rol, array('placeholder'=>$permisoUsuario->sub_rol->RolSubRol)) !!}--}}
				  		</div>
				  </div>

				  <div class="form-group">
						{!! Form::label('funcion','FUNCIÓN:',['class'=>'col-md-2']) !!}
				  	<div class="col-md-10">
							<select name="funcion" class="form-control">
								<option value={{ $permisoUsuario->funcion->id }}>{{ $permisoUsuario->funcion->nombre_funcion }}</option>	
										@foreach ($funcion as $funciones)	
											<option value="{{$funciones->id}}">{{$funciones->nombre_funcion}}</option>
										@endforeach
							</select>
				  	</div>
				  </div>

				  <div class="form-group">
						{!! Form::label('unidad','UNIDAD:',['class'=>'col-md-2']) !!}
				    <div class="col-md-10">
				    	<select name="unidad" class="form-control">
								<option value={{ $permisoUsuario->unidad->id}}>{{ $permisoUsuario->unidad->nombre_unidad }}</option>	
										@foreach ($unidad as $unidades)	
											<option value="{{$unidades->id}}">{{$unidades->nombre_unidad}}</option>
										@endforeach
							</select>
				    </div>
				  </div>

				  <div class="form-group">
						{!! Form::label('sis','COD SIS:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">{!!Form::text('sis',$permisoUsuario->cod_sis, array('placeholder'=> $permisoUsuario->cod_sis, 'class' => 'form-control'))!!}</div>
					</div>

					<div class="form-group">
          	{!! Form::label('fecha_inicio','* Fecha Inicio:',['class'=>'col-md-2 control-label']) !!}
          	<div class="col-md-4">{!! form::date('fecha_inicio', $permisoUsuario->fecha_inicio, array('placeholder'=>$permisoUsuario->fecha_inicio, 'class'=>'form-control')) !!}</div>          
          	{!! Form::label('fecha_fin','* Fecha FIN:',['class'=>'col-md-2 control-label']) !!}
          	<div class="col-md-4">{!!form::date('fecha_fin', $permisoUsuario->fecha_fin,array('placeholder'=>$permisoUsuario->fecha_fin,'class'=>'form-control'))!!}</div>          
       		</div><br>

					<div class="form-group">
    				{!! Form::label('activo','SUB-GRUPO ACTIVO PARA EL USUARIO',['class'=>'col-md-5']) !!}
						<div class="col-md-2">{!! Form::select('activo',['SI'=>'SI','NO'=>'NO'],'SI',array('class'=>'form-control'))!!}</div>
						<div class=" text-center col-md-5">{!! Form::button('editar sub-rol', array('type'=> 'submit','class'=>'btn btn-primary')) !!}</div>
					</div>
					{!! Form::close() !!}
			</div><!--cierre form-horizontal-->
		</div><!--cierre panel body-->
 	</div><!--cierre panel defautl-->
@endsection