@extends('templates.admintemplate')
@section('titulo')
	 <h1 class="page-header">Administradores</h1>
@stop

@section('contenido')

@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>Username</td>
				<td>Rol</td>										
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $value)
				
					<tr>
						<td>{{$value->nombre}}</td>					
						<td>{{$value->username}}</td>					
						<td>{{$value->rol}}</td>	
					</tr>
				
			@endforeach
		</tbody>
	</table>
</div>



 <h1 class="page-header">Agregar Usuario</h1>

 	<div>
 		{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

			{{ Form::open(array('url' => 'administrador/usuarios/register',  'class' => 'form-horizontal')) }}

				<div class="form-group">
					{{ Form::label('nombre', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-7">
						{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Nombre')) }}	
					</div>
				</div>
				
				<div class="form-group">
					{{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-7">
						{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=> 'Username')) }}	
					</div>
				</div>			
				<div class="form-group">
					{{ Form::label('password', 'Contraseña', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-7">
						{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'password')) }}	
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('password_confirmation', 'Confirmar Contraseña', array('class' => 'col-sm-2 control-label')) }}
					<div class="col-sm-7">
						{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder'=> 'confirmar password')) }}	
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						{{ Form::submit('Registrarse' , array('class'=> 'btn btn-primary')) }}
					</div>	
				</div>
				

			{{ Form::close() }}
</div>			

@stop