<div class="container">
<div class="form-group row">
    {!! Form::label('apellido_usuario','* Apellidos:', ['class'=>'col-md-2']) !!}
    <div class="col-md-10">
    {!! Form::text('apellido_usuario',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group row">
{!! Form::label('nombre_usuario','* Nombres:', ['class'=>'col-md-2']) !!}
    <div class="col-md-10">
    {!! Form::text('nombre_usuario',null,array('placeholder' => 'Ingrese nombre','class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('ci_usuario','* Carnet de identidad:', ['class'=>'col-md-3']) !!}
    <div class="col-md-4">
    {!! Form::text('ci_usuario',null,array('placeholder' => 'Ingrese su ci','class'=>'form-control')) !!}
    </div>
    {!! Form::label('sexo_usuario','* Genero:', ['class'=>'col-md-2 text-right']) !!}
    <div class="col-md-3">
    {!! Form::select('sexo_usuario',array('Femenino','Masculino'),null,['class'=>'form-control'])!!}
    </div>
</div>
 
</div>  