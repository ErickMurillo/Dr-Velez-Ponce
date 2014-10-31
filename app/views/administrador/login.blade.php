<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from premiumlayers.com/demos/wecare/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 05 May 2014 03:34:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="{{asset ('img/logo.jpg') }}" />
  <title>Login</title>


  {{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>



  
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a href="{{ URL::to('/') }}">x</a></button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body" style="height:200px;"> 
        @if(Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
      
      {{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}    

       {{ Form::open(array('url' => 'usuarios/validar', 'class' => 'form col-md-12 center-block')) }}
           <div class="form-group">
              {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=> 'Username')) }} 
            </div> 
            <div class="form-group">
              {{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Password')) }}  
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>              
            </div>

       {{ Form::close() }}         
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="{{ URL::to('/') }}">Cancel</a></button>
      </div>  
      </div>
  </div>
  </div>
</div>

    {{ HTML::script('js/vendor/jquery-1.11.0.min.js') }}
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/vendor/bootstrap.min.js') }}
</body>
</html>