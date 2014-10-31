<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	  
	  <title>Foro</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link rel="shortcut icon" href="{{asset ('img/logo.jpg') }}" />
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      {{ HTML::style('css/main.css') }}
      {{HTML::style('css/animate.css') }}
      

      <!--PLUGIN -->
      {{ HTML::style('css/bootstrap.min.css') }}
      {{ HTML::style('css/bootstrap.css') }}


</head>


<body>


<a href="{{URL::to('/')}}"><button type="button" id="boton" class="btn btn-primary" ><span class="glyphicon glyphicon-circle-arrow-left" style="margin-right:0.6em;"></span>Regresar a Página Principal</button></a>


@if(Auth::check())
    <a href="{{URL::to('/administrador/temas')}}"><button type="button" id="botoniniciar" class="btn btn-primary" ><span class="glyphicon glyphicon-user" style="margin-right:0.6em;" ></span>Regresar al Panel de Control</button></a>
@else

<a href="{{URL::to('/login')}}"><button type="button" id="botoniniciar" class="btn btn-primary" ><span class="glyphicon glyphicon-user" style="margin-right:0.6em;" ></span>Iniciar Sesión</button></a>

@endif

<h1 style="padding:1em 0 1em 0; font-family:'Marmelad' !important;" align="center">Bienvenidos al Foro</h1>

@yield('content')

<hr>

   <h1 align="center" style="font-family:'Marmelad' !important;margin:2em 0 2em 0;">Agregue un tema nuevo aqui</h1>
      
      <div>
        
      
      {{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}    

       {{ Form::open(array('url' => 'foro/registerTema', 'class' => 'form')) }}
            <div class="form-group txt">

            @if(Auth::check()) 
             {{ Form::text('nombre', Input::old('nombre',  Auth::user()->nombre), array('class' => 'form-control', 'maxlength' => '20')) }}
           @else
              {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Nombre y Apellido', 'maxlength' => '20')) }}
          @endif
              
             
            </div>
           <div class="form-group txt">
              {{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control', 'placeholder'=> 'Nombre del Tema','maxlength' => '50')) }} 
            </div> 
            <div class="form-group">
              {{ Form::textarea('contenido',null, array('class' => 'form-control', 'placeholder'=> 'Agregar Contenido', 'maxlength' => '250')) }}
            </div>
            <div class="form-group">
            {{ Form::submit('Agregar tema' , array('class'=> 'btn btn-primary btncoment')) }}
              
            </div>
       {{ Form::close() }} 

        </div>



<footer>
	
<h3 align="center" style="color: white;">Dr. Juan Carlos Velez Ponce &copy; Derechos Reservados 2014</h3>
<h3 align="center" style="color: white;">Website Powered By <a href="https://www.facebook.com/EngitechNicaragua" target="_blank" style="color: white;">Engitech</a></h3>
</footer>
			

  {{HTML::script('js/wow.min.js')}}
  {{ HTML::script('js/vendor/jquery-1.11.0.min.js') }}
  {{ HTML::script('js/animatedMenu.js') }}
  {{ HTML::script('js/fixNav.js') }}
  {{ HTML::script('js/arrowScroll.js') }}
  {{ HTML::script('js/plugins.js') }}
  {{ HTML::script('js/vendor/bootstrap.js') }}
  {{ HTML::script('js/vendor/bootstrap.min.js') }}
  {{ HTML::script('js/main.js') }}
  {{ HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}

            <script>
            new WOW().init();
          </script>



</body>
</html>
