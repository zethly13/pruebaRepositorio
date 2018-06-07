<div class="form-group row">
	{!! Form::label('codSis','* Cod Sis:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('codSis',null,array('placeholder' => 'Ingrese codigo sis', 'class'=>'form-control')) !!}
	</div>
	<a class="btn btn-secondary btn-sm" href="#buscarEstudiante" data-target="#buscarEst" data-toggle="modal"><i class="fa fa-pencil"></i>  Buscar Estudinte</a>
</div>

<div class="form-group row">
	{!! Form::label('nombre','* Nombres:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('nombre',null,array('placeholder' => 'Ingrese su nombre', 'class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('apellido','* Apellidos:', ['class'=>'col-md-2']) !!}
	<div class="col-md-5">
	{!! Form::text('apellido',null,array('placeholder' => 'Ingrese apellido','class'=>'form-control')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('carrera','* carrera:', ['class'=>'col-md-2']) !!}
	<div class="col-md-5">
	{!! Form::text('carrera',null,array('placeholder' => 'Ingrese su carrera','class'=>'form-control')) !!}
	</div>
</div>

{{-- <div class="text-center">
  {!! Form::button('Agregar nuevo usuario', array('class'=>'btn btn-success'))!!}
</div> --}}
<a href="{{ route('titulacion.buscar') }}" role="button" class="btn btn-success">BUSCAR UN USUARIO</a>

<script>
	function search_sis(){
		cod_sis = document.getElementById("search_sis").value;
		$.get('search/'+cod_sis, function(data, status){
		var array=new Array(data);
		var contador;

	for( contador=0; contador < 7; contador++ ) {
     document.write( "El valor de la posición [" + contador + "] es [" + array[contador] + "]<br/>" );
 	}
    });
		console.log(array);


	}
</script>