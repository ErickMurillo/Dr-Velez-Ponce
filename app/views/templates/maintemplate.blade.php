    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Dr. Vélez Ponce</title>
      <link rel="shortcut icon" href="img/logo.jpg" />
      <meta name="description" content="Consultorio Vélez Ponce con atención a niños y adultos en las especialidades de Ortopedia, Traumatologia, Artorscopia y Cirugía Biológica ">
      <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Ortopedia,Traumatologia,Artorscopia,Cirugía Biológica,Reemplazo Articular,Orto,Células Madres Extraídas de Médula Osea,Plasma Rico en Plaquetas,doctor,Vélez,Ponce,dr,drvelezponce,Dr">
<meta name="author" content="Dr. Juan Carlos Velez Ponce">


      {{ HTML::style('css/main.css') }}
      {{HTML::style('css/animate.css') }}
      {{HTML::style('css/shadowbox.css') }}
      

      <!--PLUGIN -->
      {{ HTML::style('css/bootstrap.min.css') }}




    </head>
    <body>

     <header>
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{asset ('img/PORTADA 1.jpg') }}">
          </div>

          <div class="item">
            <img src="{{asset('img/PORTADA 2.jpg')}}">
          </div>

          <div class="item">
            <img src="{{asset('img/PORTADA 3.jpg')}}">
          </div>


        </div>

        <!-- Controls -->
  <!--       <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a> -->
      </div>

      <nav class="navbar navbar-default menu">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
           <span class="sr-only"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button><a href="#" class="navbar-brand" align="center" style="color:white;">Dr. Vélez Ponce</a>
       </div>


       <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav nav-pills nav-justified">

          <ul class="nav nav-pills nav-justified" id="menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#especialidades">Especialidades</a></li>
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="#Contacto">Contacto</a></li>
            <li><a href="{{URL::to('foro') }}">Foro </a></li>

          </ul>

        </div>
      </nav>
    </header>

    <!--******************************************Informacion************************************************************* -->
    <div>
      <div class="container" id="inicio">



        <div class="col-xs-12 col-md-4 " id="img" >

         <img src="{{ asset('img/10.jpg') }}" width="100%" class="img-circle" style="padding-bottom:1em;" >
         <h2 align="center">Dr. Juan Carlos Vélez Ponce</h2> 

       </div>



       <div class="col-xs-12 col-md-8 inf wow slideInRight" data-off-set="100">

        <p align="justify"><strong>Especialista en Ortopedia y Traumatología,
         Cirugía Artroscópica y Reemplazo Articular. Estudios de la especialización en Managua, Nicaragua;
         La Habana, Cuba; Bogotá, Colombia; y entrenamientos en Puerto Rico, México, 
         El Salvador y Chicago US.</strong></p>

         <br>

         <li class="vineta"><strong>Miembro de la Sociedad Nicaragüense de Ortopedia y Traumatología</strong></li> 
         <li class="vineta"><strong>Miembro de la Sociedad Latinoamericana de Ortopedia y Traumatología.</strong></li>

         <h1 align="center" style="font-family:'Marmelad' !important; font-size:24px !important"><strong><u>Experiencia</u></strong></h1>
         <ul>
          <li class="vineta"><strong>16 años en Ortopedia y Traumatología.</strong></li>
          <li class="vineta"><strong>14 años en Cirugía Artroscópica.</strong></li>
          <li class="vineta"><strong>9 años en Cirugías de Reemplazos Articulares.</strong></li>
          <li class="vineta"><strong>2 años en aplicación de Plasma Rico en Plaquetas.</strong></li>
          <li class="vineta"><strong>1 año en aplicación Células Madres Extraídas de Médula Osea.</strong></li>
        </ul>
      </div>

    </div>

  </div>

  <!--**********************************************Especialidades********************************************************* -->

  <div class="container" id="especialidades">
    <div class="row">
      <h1 align="center" style="margin-bottom:1em;" class="wow bounceInUp" data-off-set="100"> Especialidades</h1>
      <div class="col-xs-12 col-md-3">
        <div class="thumbnail">
          <img src="{{ asset('img/ortopedia.jpg') }}" class="img-circle" width="56%">
          <div class="caption">
            <h3>Ortopedia</h3>
            <p>Especialidad médica dedicada a corregir o de evitar las deformidades o traumas del sistema musculoesquelético del cuerpo humano, por medio de cirugías (cirugía ortopédica), aparatos (llamado órtesis) o ejercicios corporales.</p>
               <br>

              <h3 style="font-family:'Marmelad' !important; font-size:18px !important">Algunas Operaciones que he Realizado</h3>
              <ul>
                <li class="lista">Alineamiento de deformidades angulares de los huesos largos y articulares.</li>
                <li class="lista">Recepción de tumores blandos.</li>
                <li class="lista">Correccion de Hallux Valgus(Juanetes).</li>
                <li class="lista">Reemplazos articulares.</li>
              </ul> 
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-3">
          <div class="thumbnail">
            <img src="{{ asset('img/trauma.jpg') }}" class="img-circle" width="68%">
            <div class="caption">
              <h3>Traumatología</h3>
              <p>Parte de la medicina que se dedica al estudio de las lesiones del aparato locomotor. Se ocupa de las 
                lesiones traumaticas de columna y extremidades que afectan a: fracturas, Espifisiliolisis (niños), ligamentos, esguinces
                luxaciones, etc.</p>
                 <br>
                <h3 style="font-family:'Marmelad' !important; font-size:18px !important">Algunas Operaciones que he Realizado</h3>
                <ul>
                  <li class="lista">Correccion de Inestabilidades Articulares (Luxaciones).</li>
                  <li class="lista">Osteosintesis de Fracturas.</li>
                  <li class="lista">Manejo de Fracturas Expuestas(abiertas).</li>
                  <li class="lista">Tenorrafia(Suturas de Tendón).</li>
<li class="lista">Politraumatizados.</li>
                </ul> 


              </div>
            </div>
          </div>

        <div class="col-xs-12 col-md-3">
          <div class="thumbnail">
            <img src="{{ asset('img/artroscopia.jpg') }}" class="img-circle" width="100%" style="margin-bottom:0.3em;">
            <div class="caption">
              <h3>Artroscopia</h3>
              <p style="margin-bottom:3.5em !important;">Técnica de exploración de las cavidades articulares con mínima invasión que permite ver, realizar tomas de biopsias y pequeñas actuaciones terapéuticas. Se realiza mediante la introducción en el interior de la articulación de un artroscópio.</p>
                 
                <h3 style="font-family:'Marmelad' !important; font-size:18px !important">Algunas Operaciones que he Realizado</h3>
                <ul>
                  <li class="lista">Lesiones de meniscos con sutura o meniscectomia  parciales.</li>
                  <li class="lista">Lesiones condrales de los condilos femorales, platillos tibiales y rótula.</li>
                  <li class="lista">Extracciones de cuerpos extraños.</li>
                  <li class="lista">Reconstruccion de ligamentos cruzados anterior y posterior con tecnicas hueso-tendon- hueso, tendones isquiotibiales.</li>
                  <li class="lista">Fijación de Fracturas con Mínimo Desplazamiento.</li>
                  <li class="lista">Aplicación post-artroscopica de Plasma Rico en Plaquetas.</li>
                  <li class="lista">Trasplante de Células Madres Mesenquimales del adulto extraídas de Médula Osea post-artroscopica.</li>
                </ul> 


              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-3">
            <div class="thumbnail">
              <img src="{{ asset('img/bio.jpg') }}" class="img-circle" width="78.5%" style="margin-bottom:0.2em;">
              <div class="caption">
                <h3>Cirugía Biológica</h3>
                <p>Técnicas diagnósticas y métodos terapéuticos orientados a la prevención y tratamiento de las enfermedades, empleando recursos que refuerzan la tendencia auto-curativa de nuestra naturaleza.</p>
                </div>
                 <br>
<br>
                <h3 style="font-family:'Marmelad' !important; font-size:18px !important; padding-top:0.5em !important;">Algunas Operaciones que he Realizado</h3>
                <ul>
                  <li class="lista">Aplicación de Plasma Rico en Plaquetas: Tendinopatias(hombro y codo doloroso); Ulceras Tróficas; deterioro Articular en Rodilla, Tobillo, (aun en fase de investigación); dolor de Talón; entre otras. </li>
                  <li class="lista">Trasplante de Células Madres Mesenquimales del adulto extraídas de Médula Osea: Tendinopatias(hombro y codo doloroso), daño Articular de Rodilla u otra Articulación afectada(aun en fase de investigación), fracturas que no han consolidado independientemente de la extremidad afectada, entre otras.</li>
                
                </ul> 
              </div>
            </div>
          </div>
        </div>


        <!--**********************************************Galeria********************************************************* -->

    <div class="container" id="galeria">
         <h1 align="center" style="margin-bottom:2em;" class="wow bounceInUp" data-off-set="100">Galería</h1>
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#ortopedia" role="tab" data-toggle="tab">Ortopedia</a></li>
          <li><a href="#trauma" role="tab" data-toggle="tab">Traumatología</a></li>
          <li><a href="#artroscopia" role="tab" data-toggle="tab">Artroscopia</a></li>
          <li><a href="#bio" role="tab" data-toggle="tab">Cirugia Biologica</a></li>
        </ul>

        <div class="tab-content">
          <!-- **********************Tab ortopedia**************************************************************************** -->
          <div class="tab-pane active" id="ortopedia">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Cirugia de partes blandas en tobillo y pie por tumoracion benigna
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                       <div class=" col-xs-12 col-md-12">
                            <p>Paciente masculino de 65 años con historia de trauma directo en el pie izquierdo (patada de mula) de 30 años de evolución y crecimiento progresivo de tumoración blanda</p>
                        </div>
                      <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/1.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/1.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/2.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/2.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/3.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/3.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/4.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/4.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/5.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/5.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/6.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/6.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/7.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/7.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/8.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/8.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/9.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/9.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/9.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/9.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/10.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/10.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/11.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/11.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                        <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Exceresis biopsia]" href="{{ asset('img/Ortopedia/12.jpg') }}">
                              <img src="{{ asset('img/Ortopedia/assets/12.jpg') }}" class="group1 img-rounded"></a>
                        </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- **********************Tab trauma**************************************************************************** -->
          <div class="tab-pane" id="trauma">

            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                      FFractura Subtrocanterica por HPAF (Herida por arma de fuego)  reducida con Enclavijamiento Endomedular a acielo cerrado
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in">
                  <div class="panel-body">
<div class=" col-xs-12 col-md-12">
                            <p>Paciente masculino de 31 años con historia de HPAF a quema ropa presentado una fractura conminuta Subtrocanterica. </p>
                        </div>
                   <div class=" col-xs-6 col-md-2">
                    <a class="thumbnail" rel="shadowbox[Enclavijamiento Endomedular]" href="{{ asset('img/gallery/trauma1.jpg') }}">
                      <img src="{{ asset('img/gallery/trauma1.jpg') }}" class="group1 img-rounded"></a>
                    </div>

                    <div class="col-xs-6 col-md-2">
                      <a class="thumbnail" rel="shadowbox[Enclavijamiento Endomedular]" href="{{ asset('img/gallery/trauma2.jpg') }}">
                        <img src="{{ asset('img/gallery/trauma2.jpg') }}" class="group1 img-rounded"></a>
                      </div>

                      <div class=" col-xs-6 col-md-2">
                        <a class="thumbnail" rel="shadowbox[Enclavijamiento Endomedular]" href="{{ asset('img/gallery/trauma3.jpg') }}">
                          <img src="{{ asset('img/gallery/trauma3.jpg') }}" class="group1 img-rounded"></a>
                        </div>

                        <div class=" col-xs-6 col-md-2">
                          <a class="thumbnail" rel="shadowbox[Enclavijamiento Endomedular]" href="{{ asset('img/gallery/trauma4.jpg') }}">
                            <img src="{{ asset('img/gallery/trauma4.jpg') }}" class="group1 img-rounded"></a>
                          </div>

                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Enclavijamiento Endomedular]" href="{{ asset('img/gallery/trauma5.jpg') }}">
                              <img src="{{ asset('img/gallery/trauma5.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <!-- <div class=" col-xs-6 col-md-2">
                              
                              <button class="btn btn-primary btn-lg" id="galebtn" style="width:100% !important;" data-toggle="modal" data-target="#myModal">
                                Video
                              </button>
                            </div> 
                                 -->

                            <div class="modal fade" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  </div>
                                  <div class="modal-body">
                                   <iframe class="embed-responsive-item youtube-player" width="100%" src="http://www.youtube.com/embed/04o1YXWr1Kk"></iframe>
                                 </div>
                                 <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                        </div>
                      </div>
                    </div>
                    <!-- **********************items**************************************************************************** -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Cirugia Reconstructiva del Pie
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
<div class=" col-xs-12 col-md-12">
                            <p>Paciente masculino de 31 años con antecedente de pie traumático izquierdo por accidente motociclístico.</p>
 <p>Características de la lesión del pie</p>

<ul style="font-family:'Marmelad' !important; font-size:18px !important">
                  <li>Perdida de cubierta cutánea de aproximadamente  8cm de diámetro</li>
                  <li>Fractura expuesta y pérdida ósea (hueso cuboides)</li>
                  <li>Luxofractura Astrágaloescafoidea</li>
                  <li>Fractura lineal del calcáneo </li>
                  <li>Infección con Seudomona</li>
                </ul> 

<p>Se manejó con fijador externo lineal en el pie, con lavados quirúrgicos repetitivos y espaciadores de cemento óseo en ausencia del hueso cuboides. Una vez controlada la infección se procedió a realizarle injerto auto logo de cresta iliaca en área de cuboides fijado con clavo de Steiman e injerto vascularizado de la región volar del antebrazo izquierdo.</p>

                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie1.jpg') }}">
                              <img src="{{ asset('img/gallery/pie1.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <div class="col-xs-6 col-md-2">
                              <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie2.jpg') }}">
                                <img src="{{ asset('img/gallery/pie2.jpg') }}" class="group1 img-rounded"></a>
                              </div>

                              <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie3.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie3.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                  <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie4.jpg') }}">
                                    <img src="{{ asset('img/gallery/pie4.jpg') }}" class="group1 img-rounded"></a>
                                  </div>
 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie5.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie5.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie6.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie6.jpg') }}" class="group1 img-rounded"></a>
                                </div>


 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie7.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie7.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie8.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie8.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie9.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie9.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie10.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie10.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie11.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie11.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie12.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie12.jpg') }}" class="group1 img-rounded"></a>
                                </div>

<div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie13.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie13.jpg') }}" class="group1 img-rounded"></a>
                                </div>

<div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie14.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie14.jpg') }}" class="group1 img-rounded"></a>
                                </div>


<div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Cirujia Reconstructiva Pie]" href="{{ asset('img/gallery/pie15.jpg') }}">
                                  <img src="{{ asset('img/gallery/pie15.jpg') }}" class="group1 img-rounded"></a>
                                </div>


                                </div>
                              </div>
                            </div>
                            <!-- **********************items**************************************************************************** -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Fractura de Cadera 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
       <div class=" col-xs-12 col-md-12">
                            <p>Paciente femenino de 85 años, valorada 8 días posterior a caída, la cual presentaba una fractura intertrocanterica inestable.</p>
                        </div>
                      <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura]" href="{{ asset('img/Traumatologia/1f.jpg') }}">
                              <img src="{{ asset('img/Traumatologia/assets/1f.jpg') }}" class="group1 img-rounded"></a>
                        </div>
<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura]" href="{{ asset('img/Traumatologia//2f.jpg') }}">
                              <img src="{{ asset('img/Traumatologia//assets/2f.jpg') }}" class="group1 img-rounded"></a>
                        </div>
<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura]" href="{{ asset('img/Traumatologia//3f.jpg') }}">
                              <img src="{{ asset('img/Traumatologia//assets/3f.jpg') }}" class="group1 img-rounded"></a>
                        </div>
<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura]" href="{{ asset('img/Traumatologia//4f.jpg') }}">
                              <img src="{{ asset('img/Traumatologia//assets/4f.jpg') }}" class="group1 img-rounded"></a>
                        </div>
      </div>
    </div>
  </div> 

   <!-- **********************items**************************************************************************** -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseT4">
                            Fractura Supra e Intercondilia del Femur Izquierdo
                          </a>
                        </h4>
                      </div>
                      <div id="collapseT4" class="panel-collapse collapse">
                        <div class="panel-body">
<div class=" col-xs-12 col-md-12">
                            <p>Paciente masculino de 59 años con antecedentes de Diabetes Mellitus Tipo II descompensado con trauma en la rodilla izquierda en accidente motociclistico </p>

                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/1.jpg') }}">
                              <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/1.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <div class="col-xs-6 col-md-2">
                              <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/2.jpg') }}">
                                <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/2.jpg') }}" class="group1 img-rounded"></a>
                              </div>

                              <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/3.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/3.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                  <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/4.jpg') }}">
                                    <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/4.jpg') }}" class="group1 img-rounded"></a>
                                  </div>
 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/5.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/5.jpg') }}" class="group1 img-rounded"></a>
                                </div>

 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Supra e Intercondilia del Femur Izquierdo]" href="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/6.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/fractura supra e intercondilia del femur izquierdo/6.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                </div>
                              </div>
                            </div>
 <!-- **********************items**************************************************************************** -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseT5">
                            Fractura Diafisiaria de Tibia
                          </a>
                        </h4>
                      </div>
                      <div id="collapseT5" class="panel-collapse collapse">
                        <div class="panel-body">
<div class=" col-xs-12 col-md-12">
                            <p>Paciente maculino de 28 años accidente motociclistico con deformidad en la pierna izquierda.</p>

                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/1.jpg') }}">
                              <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/1.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <div class="col-xs-6 col-md-2">
                              <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/2.jpg') }}">
                                <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/2.jpg') }}" class="group1 img-rounded"></a>
                              </div>

                              <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/3.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/3.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                  <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/4.jpg') }}">
                                    <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/4.jpg') }}" class="group1 img-rounded"></a>
                                  </div>
                                 <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/5.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/5.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/6.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/6.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/7.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/7.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura Diafisiaria de Tibia]" href="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/8.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura Diafisiaria de Tibia/8.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                </div>
                              </div>
                            </div>
<!-- **********************items**************************************************************************** -->

                <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseT6">
                            Epifisiolisis de Cadera
                          </a>
                        </h4>
                      </div>
                      <div id="collapseT6" class="panel-collapse collapse">
                        <div class="panel-body">
                <div class=" col-xs-12 col-md-12">
                            <p>Paciente femenina de 10 años de edad con sobrepeso importante para su edad presentando cogera al caminar por acortamiento y rotación externa de la pierna izquierda.</p>

                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Epifisiolisis de Cadera]" href="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/1.jpg') }}">
                              <img src="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/1.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <div class="col-xs-6 col-md-2">
                              <a class="thumbnail" rel="shadowbox[Epifisiolisis de Cadera]" href="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/2.jpg') }}">
                                <img src="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/2.jpg') }}" class="group1 img-rounded"></a>
                              </div>

                              <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Epifisiolisis de Cadera]" href="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/3.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Epifisiolisis de Cadera/3.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                               
                           

                                </div>
                              </div>
                            </div>
<!-- **********************items**************************************************************************** -->

<div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseT7">
                            Fractura del Extremo Distal del Radio Derecho
                          </a>
                        </h4>
                      </div>
                      <div id="collapseT7" class="panel-collapse collapse">
                        <div class="panel-body">
                <div class=" col-xs-12 col-md-12">
                            <p>Paciente Femenica de 57 años con trauma en la muñeca derecha al caer en su casa, dolor agudo y deformidad.</p>

                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/1.jpg') }}">
                              <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/1.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            <div class="col-xs-6 col-md-2">
                              <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/2.jpg') }}">
                                <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/2.jpg') }}" class="group1 img-rounded"></a>
                              </div>

                              <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/3.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/3.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/4.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/4.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/5.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/5.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/6.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/6.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/7.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/7.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/8.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/8.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                                <div class=" col-xs-6 col-md-2">
                                <a class="thumbnail" rel="shadowbox[Fractura del Extremo Distal del Radio Derecho]" href="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/9.jpg') }}">
                                  <img src="{{ asset('img/Traumatologia/Fractura del Extremo Distal del Radio Derecho/9.jpg') }}" class="group1 img-rounded"></a>
                                </div>

                               
                           

                                </div>
                              </div>
                            </div>
<!-- **********************items**************************************************************************** -->
</div>

</div>
<!-- **********************Tab artroscopia**************************************************************************** -->
<div class="tab-pane" id="artroscopia">

 <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseT">
                            Artroscopia de rodilla
                          </a>
                        </h4>
                      </div>
                      <div id="collapseT" class="panel-collapse collapse">
                        <div class="panel-body">
                       <div class=" col-xs-12 col-md-12">
                            <p>Paciente masculino de 48 años con historia de fractura de meseta tibial externa en rodilla izquierda de 5 años de evolución. Últimos 2 años con dolor persistente e inestabilidad articular al caminar y sensación de bloqueo.</p>
                        </div>
                          <div class=" col-xs-12 col-md-6">
                            
                              <iframe class="embed-responsive-item youtube-player" width="100%" src="http://www.youtube.com/embed/0QM-iqYMFOw"></iframe>
                        </div>

                                </div>
                              </div>
                            </div>
</div>

<!-- **********************Tab bio**************************************************************************** -->
<div class="tab-pane" id="bio">
<!-- **********************items**************************************************************************** -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseCb1">
                            Talalgia izquierda por fascitis plantar
                          </a>
                        </h4>
                      </div>
                      <div id="collapseCb1" class="panel-collapse collapse">
                        <div class="panel-body">
<div class=" col-xs-12 col-md-12">
                            <p>Paciente femenina de 53 años con dolor crónico en talón izquierdo de 2 años de evolución </p>
                        </div>
                          <div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/1.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/1.jpg') }}" class="group1 img-rounded"></a>
                            </div>
<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/2.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/2.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/3.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/3.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/4.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/4.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/5.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/5.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/6.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/6.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/7.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/7.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/8.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/8.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/9.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/9.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/10.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/10.jpg') }}" class="group1 img-rounded"></a>
                            </div>

<div class=" col-xs-6 col-md-2">
                            <a class="thumbnail" rel="shadowbox[Talalgia izquierda por fascitis plantar]" href="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/11.jpg') }}">
                              <img src="{{ asset('img/Cirugia Biologica/Talalgia izquierda por fascitis plantar/11.jpg') }}" class="group1 img-rounded"></a>
                            </div>

                            

                              

                                
                                </div>
                              </div>
                            </div>
                    
</div>
</div>


</div>






<!--**********************************************Contactenos********************************************************* -->

<div class="container" id="Contacto" style="margin-bottom:1.5em;">

  <h1 align="center" style="margin-bottom:1em;" class="wow rotateIn" data-off-set="100"> Contacto</h1>

  <div class="col-xs-12 col-md-12">
    <h3 align="center" style="font-family: 'Marmelad'; font-size:18px;padding-bottom:1em;"
    class="wow lightSpeedIn">Nos Encontramos ubicados frente a la embajada de Mexico, costado norte, contiguo a la Alianza
    Francesa.</h3>

    <h3 align="center" style="font-family: 'Marmelad'; font-size:18px;padding-bottom:1em;"
    class="wow lightSpeedIn">Telefonos de oficina: (505) 2267-1285 / (505) 2267-0138</h3>
  

    <h3 align="center" style="font-family: 'Marmelad'; font-size:18px;padding-bottom:1em;"
    class="wow lightSpeedIn">Teléfono celular: (505) 8886-4665</h3>

   <h3 align="center" style="font-family: 'Marmelad'; font-size:18px;padding-bottom:1em;"
    class="wow lightSpeedIn">Correo Electrónico: juancarlos@drvelezponce.com</h3>  

  </div>

</div>

<div id="map" style="height:400px; width:80%; margin:0 auto; margin-bottom:2em;"></div>


<footer>
  <a href="#" onclick="scrollToTop();return false"><img id="arrow" src="{{asset ('img/arrow.png')}}" alt="Regresar al Inicio"></a> 

<h3 align="center" style="color: white;">Dr. Juan Carlos Velez Ponce &copy; Derechos Reservados 2014</h3>
<h3 align="center" style="color: white;">Website Powered By <a href="https://www.facebook.com/EngitechNicaragua" target="_blank" style="color: white;">Engitech</a></h3>
</footer>
<!-- /container -->        






{{HTML::script('js/wow.min.js')}}
{{ HTML::script('js/vendor/jquery-1.11.0.min.js') }}
{{ HTML::script('js/plugins.js') }}
{{ HTML::script('js/vendor/bootstrap.js') }}
{{ HTML::script('js/vendor/bootstrap.min.js') }}
{{ HTML::script('js/main.js') }}
{{ HTML::script('js/shadowbox.js') }}
{{ HTML::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}


<script>
  $('.carousel').carousel({
    interval: 6000
  })
</script>

<script type="text/javascript">
 var timeOut;
 function scrollToTop() {
  if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
   window.scrollBy(0,-30);
   timeOut=setTimeout('scrollToTop()',1);
 }
 else clearTimeout(timeOut);
}
</script>
<script>
  new WOW().init();
</script>

<script type="text/javascript">
 Shadowbox.init();
</script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<script>
  
  var lat = null;
  var lng = null;
  var map = null;
  var geocoder = null;
  var marker = null;

  $(document).ready(function(){
       //obtenemos los valores en caso de tenerlos guardados en la BD
       lat = '12.120078493873681';
       lng = '-86.26049465452274';


     
      initialize();
  });


  function initialize() {

    geocoder = new google.maps.Geocoder(); 

       //Si hay valores creamos un objeto Latlng
       if(lat !='' && lng != '')
       {
        var latLng = new google.maps.LatLng(lat,lng);
       }
       else
       {
        //Si no creamos el objeto con una latitud cualquiera 
        var latLng = new google.maps.LatLng(12.13282,-86.2504);
    }

    var myOptions = {
          center: latLng,//centro del mapa
          zoom: 15,//zoom del mapa
          mapTypeId: google.maps.MapTypeId.ROADMAP, //tipo de mapa, carretera, satelite etc etc
          draggable: false
      };
        //creamos el mapa con las opciones anteriores y le pasamos el elemento div
        map = new google.maps.Map(document.getElementById("map"), myOptions);

        marker = new google.maps.Marker({
            map: map,//el mapa ya creado
            position: latLng,//objeto con latitud y longitud
            draggable: false //que el marcador se pueda arrastrar
        });
    }     



  </script>

</body>
</html>