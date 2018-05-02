<div class="form-group row">
	{!! Form::label('presidente','Presidente:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('presidente',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#CrearPre" data-target="#crearPre" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearPre">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Presidente</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarPre" data-target="#modificarPre" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarPre">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Presidente</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
	
</div>


<div class="form-group row">
	{!! Form::label('miembro1','Miembro 1:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro1',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi1" data-target="#crearMi1" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearMi1">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Miembro</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi1" data-target="#modificarMi1" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarMi1">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Miembro 1</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
</div>


<div class="form-group row">
	{!! Form::label('miembro2','Miembro 2:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro2',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi2" data-target="#crearMi2" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearMi2">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Miembro</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi2" data-target="#modificarMi2" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarMi2">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Miembro</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
</div>

<div class="form-group row">
	{!! Form::label('miembro3','Miembro 3:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('miembro3',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearMi3" data-target="#crearMi3" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearMi3">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Miembro</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarMi3" data-target="#modificarMi3" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarMi3">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Miembro</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
</div>


<div class="form-group row">
	{!! Form::label('tutor','Tutor:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('tutor',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearTutor" data-target="#crearTutor" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearTutor">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Tutor</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarTutor" data-target="#modificarTutor" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarTutor">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Tutor</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
</div>


<div class="form-group row">
	{!! Form::label('decano','Decano:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::select('decano',['1'=>'prueba 1','2'=>'prueba 2'],null,array('class'=>'form-control'))!!}
	</div>
	<div class="col-md-2">
	<a class="btn btn-info btn-sm " href="#crearDecano" data-target="#crearDecano" data-toggle="modal"><i class="fa fa-user"></i> nuevo Profesional</a>
	</div>
		<div class="modal fade" id="crearDecano">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Crear Decano</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          				@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>	

	<div class="col-md-2">
	<a class="btn btn-success btn-sm" href="#modificarDecano" data-target="#modificarDecano" data-toggle="modal"><i class="fa fa-pencil"></i>  Modificar Profesional</a>
	</div>
		<div class="modal fade" id="modificarDecano">
    		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h2 class="modal-title">Modificar Datos Decano</h2>
           			<button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
        		</div>         
        		<div class="modal-body">
          			{!! Form::open() !!}
          			@include('titulacion.partials.nuevoProfesional')
        		</div>
        		<div class="modal-footer">
            		{!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
            		{!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
        		</div>            
      		</div>              
    		</div> 
    		{{ Form::close() }}         
  		</div>
</div>