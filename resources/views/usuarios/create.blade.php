  
@extends('layout.master')
@section('contenido')

<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header text-center text-muted"><strong>FORMULARIO DE REGISTRO</strong></div>
            <div class="card-body">
                <p><strong>todos los campos en asterisco (*) son de manera obligatoria</strong></p>
                <hr>
                {!! Form::open(array('route' =>array('usuarios.store'), 'method' => 'POST'), array('role'=> 'form')) !!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {!! Form::label('login_usuario','* Login:')!!}
                            {!! Form::text('login_usuario',null,array('placeholder' => 'Ingrese su login', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('contraseña_usuario','* Contraseña:')!!}
                            {!! Form::text('contraseña_usuario',null,array('placeholder' => 'Ingrese su contraseña', 'class'=>'form-control')) !!}  
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {!! Form::label('numero_identidad_usuario','* Documento de indentidad:')!!}
                            {!! Form::text('numero_identidad_usuario',null,array('placeholder' => 'Ingrese su doc CI', 'class'=>'form-control')) !!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('tipo_doc_usuario','* Tipo documento:') !!}
                            {!! Form::select('tipo_doc_usuario',$tipoDocId->pluck('nombre_tipo_doc_identidad','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('expedido_usuario','* Expedido en:') !!}
                            {!! Form::select('expedido_usuario',$ciudad->pluck('nombre_ciudad','id'),null,['placeholder' => 'Seleccione','class'=>'form-control '])!!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('apellido_usuario','* Apellidos:', ['class'=>'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::text('apellido_usuario',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
                        </div>
                    </div>
                
                    <div class="form-group row">
                        {!! Form::label('nombre_usuario','* Nombres:',['class'=>'col-md-2']) !!}
                        <div class="col-md-10">
                            {!! Form::text('nombre_usuario',null,array('placeholder' => 'Ingrese Nombre','class'=>'form-control')) !!}
                            @if ($errors->has('name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('fecha_nac_usuario','* Fecha de nacimiento:',['class'=>'col-md-3']) !!}
                        <div class="col-md-9">
                            <input name='fecha_nac_usuario' type="date" class="form-control" id="birthday" value="<?php 
                            if(isset($_SESSION["birthday_patient"])) {
                            echo $_SESSION["birthday_patient"];
                          }?>" required>
                        </div>          
                    </div>
                    
                    <div class=" form-row">
                        <div class=" form-group col-md-4">
                            {{ csrf_field()}}           
                            {!! Form::label('pais_usuario','* Pais:') !!}
                            {!! Form::select('pais_usuario',$pais->pluck('nombre_pais','id'),null,['id'=>'id_pais','placeholder' => 'Seleccione','class'=>'form-control'])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('ciudad_usuario','* Ciudad:') !!}
                            {!! Form::select('ciudad_usuario',['placeholder' => 'Seleccione'],null,['id'=>'id_ciudad','class'=>'form-control'])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!! Form::label('provincia_usuario','* Provincia:') !!}
                            {!! Form::select('provincia_usuario',['placeholder' => 'Seleccione'],null,['id'=>'id_provincia','class'=>'form-control'])!!}
                        </div>
                    </div>
                    
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            {!! Form::label('sexo_usuario','Genero:') !!}
                            {!! Form::select('sexo_usuario',array('Femenino','Masculino'),null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('estado_civil_usuario','Estado civil:') !!}
                            {!! Form::select('estado_civil_usuario',$estado->pluck('estado_civil','id'),null,['placeholder' => 'Seleccione','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-row"> 
                        <div class="form-group col-md-6">
                            {!!Form::label('tipo_email','Tipo Correo Electronico:') !!}
                            {!!Form::select('tipo_email', $tipo_email,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!!Form::label('email_usuario','Correo electronico:') !!}
                            {!!Form::email('email_usuario',null,array('placeholder' => 'example@gmail.com','class'=>'form-control')) !!}
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {!! Form::label('tipo_telefono','Tipo Telefono:') !!}
                            {!! Form::select('tipo_telefono', $tipo_telefono,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('telefono_usuario','Telefono:') !!}
                            {!! Form::text('telefono_usuario',null,array('placeholder' => 'Ingrese su Telefono','class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="from-group col-md-6">
                            {!! Form::label('tipo_direccion','Tipo Direccion:') !!}
                            {!! Form::select('tipo_direccion', $tipo_direccion,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) !!}
                        </div>
                        <div class="from-group col-md-6">
                            {!! Form::label('direccion_usuario','Direccion:') !!}
                            {!! Form::text('direccion_usuario',null,array('placeholder' => 'Ingrese direccion','class'=>'form-control')) !!}
                        </div>
                    </div> 
                    <br>
                    <div class="text-center">
                        {!! Form::button('Crear Nuevo Usuario', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

{{--
         <div class="form-row">
        
        <div class="table-responsive">
          <table  class="table table-hover table-bordered table-condensed table-striped">
            <thead>
              <th class="info">TIPO DIRECCION</th>
              <th class="info">DIRECCION</th>
              <th class="info"">MODIFICAR</th>
              <th class="info"">ELIMINAR</th>
            </thead>
            <tbody>
           
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
             
            </tr>
          </tbody>
          </table>
          </div>
          </div>
         

       {{-- 
        <button type="button" id="anadirdireccion" class="btn btn-link" href= "#nuevadireccion" data-toggle="modal">+ Añadir nueva direccion</button>
        <div class="modal fade" id="nuevadireccion">
                {{ csrf_field() }}
                       <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h2 class="modal-title">Añadir Direccion</h2>
                                  <button tyle="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>
                              </div>
                              <form action="{{URL::to('/usuario/store')}}" method="POST" id="form-direccion">
                              <div class="modal-body">
                              <input type="hidden" id="id_dir">
                                  {{ Form::label('tipo_direccion','Tipo Direccion:') }}
                                  {{ Form::select('tipo_direccion', $tipo_direccion,null, ['placeholder'=> 'Seleccione', 'class' => 'form-control']) }}

                                  {{ Form::label('direccion_usuario','Numero Telefono:') }}
                                  {{ Form::text('direccion_usuario',null,array('placeholder' => 'Ingrese su Direccion','class'=>'form-control')) }}

                              </div>
                              <div class="modal-footer">
                                  <button type="button" id="modificar" class="btn btn-primary">Guardar</button>
                                  <input type="submit" class="btn btn-success" value="Save">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                  <div class="text-center">{{ Form::button('Editar Usuario', array('type'=> 'submit','class'=>'btn btn-primary')) }}</div>
                                </form>
                              </div>
                          </div>           
                      </div>   
                  </div>--}} 



@endsection