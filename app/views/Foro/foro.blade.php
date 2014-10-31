@extends('templates.forotemplate')


 @section('content') 
<section class="posts">

	 @if(Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


  @foreach($temas as $value)

	<article class="post">
		<div class="descripcion">
			<div class="detalles">
				<h2 class="titulo">

			<a href="{{ URL::to('foro/ver/'. $value->id .'')}}">{{$value->titulo}}</a>
					 
				</h2>
				<p class="autor">
					por <strong>{{$value->nombre}}</strong>
				</p>
				
				<p class="date" style="font-size:14px;">Creado el {{ date("d F Y",strtotime($value->created_at)) }} a las {{ date("g:ha",strtotime($value->created_at)) }}</p>

			</div>
		</div>

		
		<?php  $count = Comentario::where('id_tema', $value->id)->count();  ?>
		
		<div class="acciones">
			<div class="datos">
				<h3 style="color:blue;">{{ $count }} comentarios</h3>
			</div>
		</div>

	</article>

	@endforeach

	<div style="clear:both"></div>
	
	{{ $temas->links()  }}
</section>
@stop

