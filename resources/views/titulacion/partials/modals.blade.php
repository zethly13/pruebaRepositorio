{{-- buscar usuario --}}

<div class="modal fade" id="buscarEst">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Buscar Estudiante</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
            </div>         
            <div class="modal-body">
                <div class="form-group row">
                    {!! Form::label('codSis','Cod Sis:',['class'=>'col-md-3']) !!}
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="search_sis" name="search_sis">
                        <button onclick='search_sis()'>buscar</button>
                        <div id="resultado" name="resultado"></div>
                        <p id="resultado"></p>
                    </div>
                </div>
                <p id="mostrardatos">
                </p>
            </div>
            <div class="modal-footer">
                {!! Form::button('Guardar', array('class'=>'btn btn-info'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
</div>

{{-- Defensa tesis: nuevo prof --}}

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
                {!! Form::button('Guardar', array('class'=>'btn btn-primary'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
                {{ Form::close() }}         
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
                {!! Form::button('Guardar', array('class'=>'btn btn-primary'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
        {{ Form::close() }}         
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
                {!! Form::button('Guardar', array('class'=>'btn btn-primary'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
        {{ Form::close() }}         
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
                {!! Form::button('Guardar', array('class'=>'btn btn-primary'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
        {{ Form::close() }}         
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


{{-- Ambientes --}}
<div class="modal fade" id="crearAmbiente">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Nuevo Ambiente</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">&times;</button>          
            </div>         
            <div class="modal-body">
                {!! Form::open(array('route' =>array('titulacion.addAmbiente'),'method' => 'POST'), array('role'=> 'form')) !!}
                {{ csrf_field() }}
                @include('titulacion.partials.formularioAmbiente')
            </div>
            <div class="modal-footer">
                {!! Form::button('Guardar', array('type'=> 'submit','class'=>'btn btn-primary'))!!}
                {!! Form::button('Cancelar', array('class'=>'btn btn-danger','data-dismiss'=>'modal'))!!}
            </div>            
        </div>              
    </div> 
        {{ Form::close() }}   
</div>