<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
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
<a href="{{URL::to('/foro')}}"><button type="button" id="boton" class="btn btn-primary" ><span class="glyphicon glyphicon-circle-arrow-left" style="margin-right:0.6em;"></span>Regresar al Foro</button></a>
  @yield('comentarios')









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
