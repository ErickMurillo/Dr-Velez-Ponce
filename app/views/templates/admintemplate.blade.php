<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset ('img/logo.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!--PLUGIN -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/sb-admin-2.css') }}   

    <!-- Custom Fonts -->
    {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}   
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
                <a class="navbar-brand" href="#">Bienvenido {{ Auth::user()->nombre}}</a>              
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                        
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                        
                        <li>
                            <a href="{{ URL::to('usuarios/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                       
                        <li>
                            <a class="active" href="{{ URL::to('administrador/temas') }}"><i class="fa fa-tags"></i> Temas</a>
                        </li>
                        
                        <li>
                            <a href="{{ URL::to('administrador/usuarios') }}"><i class="fa fa-table fa-fw"></i> Usuarios</a>
                        </li>

                        <li>
                            <a href="{{ URL::to('foro') }}"><i class="fa fa-tasks fa-fw"></i> Ir al Foro</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  @yield('titulo')
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @yield('contenido')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    {{ HTML::script('js/vendor/jquery-1.11.0.min.js') }}
    {{ HTML::script('js/vendor/bootstrap.min.js') }}
    {{ HTML::script('js/sb-admin-2.js') }}
    {{ HTML::script('js/metisMenu.min.js') }} 

   

</body>

</html>