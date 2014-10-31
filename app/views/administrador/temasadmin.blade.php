@extends('templates.admintemplate')

@section('titulo')
	 <h1 class="page-header">Temas</h1>
@stop

@section('contenido')

@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td width="15%"><strong>Titulo</strong></td>
				<td width="15%"><strong>Nombre</strong></td>
				<td><strong>Contenido</strong></td>
				<td><strong>Comentarios</strong></td>
				<td><strong>Opcion</strong></td>										
			</tr>
		</thead>


		<tbody>
			@foreach($temas as $value)
				<?php $count = DB::table('comentarios')->where('id_tema', '=', $value->id )->count(); ?>
					<tr>
						<td><a href="{{ URL::to('foro/ver/'. $value->id .'') }}">{{$value->titulo}}</a></td>					
						<td>{{$value->nombre}}</td>					
						<td>{{$value->contenido}}</td>
						<td>{{$count}}</td>
						<td><a href="{{ URL::to('administrador/tema/borrar/' . $value->id) }}" class="btn btn-small btn-default">Eliminar Tema</a></td>	
					</tr>
				
			@endforeach
		</tbody>
	</table>
</div>

{{ $temas->links()}}

 @stop