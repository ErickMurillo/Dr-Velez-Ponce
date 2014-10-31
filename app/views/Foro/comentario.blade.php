@extends('templates.comentariostemplate')

@section('comentarios') 
<div class="container">

	<h1 align="center">{{$tema->titulo}}</h1>

        
{{ Form::hidden('tematitulo',$tema->titulo, array('class' => 'form-control')) }}
	<hr>
	<!-- ******************************************Contenido***************************************-->

	<div class="content">
		<div class="row">
			<div class="col-md-4 lol">
				<p><span class="glyphicon glyphicon-user"></span><strong> {{$tema->nombre}}</strong></p>
				 <p style="font-size:12px;">{{ date("d F Y",strtotime($tema->created_at)) }} a las {{ date("g:ha",strtotime($tema->created_at))}}</p> 
			</div>

			<p class="col-md-4 nomb">{{$tema->contenido}}</p>
		</div>

	</div>




	<!-- ******************************************Comentarios***************************************-->
	<?php $comentario = DB::table('comentarios')->where('id_tema', '=', $tema->id )->orderBy('id')->paginate(10); ?>

	@foreach($comentario as $value)
	<div class="comentario">
		<div class="row">	
			<div class="col-md-4 lol">
				<p><span class="glyphicon glyphicon-user"></span><strong>{{$value->nombre}}</strong></p>
			</div>


			<p class="col-md-4 nomb">{{$value->comentario}}</p>


			@if(Auth::check())
			<a href="{{ URL::to('administrador/del/comentario/'. $value->id .'') }}" class="borrar">X</a>
			@endif
		</div>
	</div>
	




	@endforeach
	<hr>

	{{ $comentario->links()  }}

</div>


<hr>

<h1 align="center" style="font-family:'Marmelad' !important;margin:2em 0 2em 0;">Agregue un comentario nuevo aqui</h1>

<div>


	{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}   

	{{ Form::open(array('url' => 'foro/registerComentario', 'class' => 'form')) }}
	<div class="form-group txt">
		@if(Auth::check()) 
		{{ Form::text('nombre', Input::old('nombre', Auth::user()->nombre), array('class' => 'form-control', 'maxlength' => '20')) }}
		@else
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'maxlength' => '20', 'placeholder'=> 'Nombre y Apellido')) }} 
		@endif

	</div>
	<div class="form-group">
		{{ Form::textarea('comentario',null, array('class' => 'form-control', 'placeholder'=> 'Agregar Comentario', 'maxlength' => '250')) }}
	</div>

	<input type="hidden" name="id"  value="{{ $tema->id }}">
        <input type="hidden" name="titulo" value="{{ $tema->titulo }}">


	<div class="form-group">
		{{ Form::submit('Agregar comentario' , array('class'=> 'btn btn-primary btncoment')) }}



	</div>
	{{ Form::close() }} 


</div> 




@stop