<?php
session_start();
include 'misc.php';
if(!($_SESSION["username"] && strlen($_SESSION["username"]) > 0 && existeUsuario($_SESSION["username"]))) {
  $_SESSION["username"] = "";
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/h.png">
    <title>Empleo</title>
    <style>
    body {
      padding-top: 10%;
    }
    </style>


    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">

    <script type="text/javascript" src="./js/Chart.min.js"></script>

  </head>

  <body style="background-color:#26819f">

    <nav class="navbar navbar-inverse navbar-fixed-top " style="background-color:#04184a">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" style="font-size:30px">Hackaton</a></li>
            <li><a href="regmin.php">Empleate!</a></li>
            <li><a href="about.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="index.php?logout=1">Salir</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      <div class="col-xs-4 pull-rigth">
          <img src="./images/profile.png" class="img-responsive img-thumbnail col-md-2" alt="Cinque Terre" style="background-color:#B8D9D9; padding-top: 10px">
        <p class="col-md-2 pull-rigth" style="color:#ffffff">Bienvenido <?php print $_SESSION['username']; ?></p>
      </div>
      </div>
    </nav>
    <div class="container " >
      <div class="col-xs-12" >
        <b><h1 class="text-center col-xs-12" style="color:#25064C; font-size: 70px">Nuestra Mision</h1></b>
        <p class="text-center" style="color:#ffffff">
      Existen millones de personas en mexico y todo el mundo que necesitan de un empleo,ya que por distintas razones pudieran haberse quedado sin uno nuestra aplicacion web pretende llegar a todas esas personas
      que teniendo un oficio no logran obtener un empleo, y tambien a todas aqueyas personas que que piensan en como podrian ayudar ya que por medio de esta plataforma lo lograran, dándole la oportunidad a una
      persona de incluirlo laboralmente , así obteniendo una ganacia por su trabajo y entrar a un campo laboral donde pueda ser solicitado por varios clientes y ser colocado en el mercado
        </p>
      </div>
      <div class="col-xs-12">
        <img src="./images/hand.png" class="img-responsive img-rounded" alt="Cinque Terre" style="background-color:#26819f">
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>

    <script src="./js/bootstrap.min.js"></script>

    <!--script type="text/javascript" src="./js/Chart.bundle.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="./Starter Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script-->


</body>
</html>
