<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pizarra Virtual</title>

    <!-- Bootstrap Core -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Bootstrap Free Template -->
    {{ HTML::style('css/landing/main.css') }}

    <!-- Fonts from Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <b>Pizarra Virtual</b>
          </a>
        </div>
      </div>
    </div>

  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Haz de las matemáticas algo sencillo.</h1>
          <a href="{{ URL::route('login') }}">
            <button class="btn btn-warning btn-lg">Ingresar al Sistema</button>
          </a>
        </div><!-- /col-lg-6 -->
        <div class="col-lg-6">
          {{ HTML::image("images/landing/ipad-hand.png", "iPad",  $attributes = array('class' => 'img-responsive')) }}
        </div><!-- /col-lg-6 -->
        
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /headerwrap -->
  
  
  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>Las matemáticas<br/>Al fin de una forma fácil.</h1>
        <h3>Un entorno colaborativo que facilita el aprendizaje de las matemáticas.</h3>
      </div>
    </div><!-- /row -->
    
    <div class="row mt centered">
      <div class="col-lg-4">
        {{ HTML::image("images/landing/ser01.png", "Ser", $attributes = array('width' => '180')) }}
        <h4>1 - Herramienta Online</h4>
        <p>Accede desde cualquier dispositivo conectado a internet.</p>
      </div><!--/col-lg-4 -->

      <div class="col-lg-4">
        {{ HTML::image("images/landing/ser02.png", "Ser", $attributes = array('width' => '180')) }}
        <h4>2 - Comunícate fácilmente</h4>
        <p>Tendrás a tu disposición una forma fácil de comunicarte con tus compañeros, tutores e incluso administradores del sitio.</p>

      </div><!--/col-lg-4 -->

      <div class="col-lg-4">
        {{ HTML::image("images/landing/ser03.png", "Ser", $attributes = array('width' => '180')) }}
        <h4>3 - Verificador de Ecuaciones</h4>
        <p> Tendrás a tu disposición un poderoso verificador de ecuaciones que te dirá si tus cálculos matemáticos son correctos o no , si encontramos algún error en tus ecuaciones te propondremos posibles errores comunes que  pudiste haber cometido.</p>

      </div><!--/col-lg-4 -->
    </div><!-- /row -->
  </div><!-- /container -->
  
  <div class="container">
    <hr>
    <div class="row centered">
      <div class="col-lg-6 col-lg-offset-3">
        <a href="{{ URL::route('login') }}">
          <button type="submit" class="btn btn-warning btn-lg">Ingresar al Sistema</button>
        </a>
      </div>
      <div class="col-lg-3"></div>
    </div><!-- /row -->
    <hr>
  </div><!-- /container -->
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery Version 2.1.1 -->
    {{ HTML::script('js/jquery.min.js') }}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js') }}

  </body>
</html>