<?php
session_start();
include 'misc.php';

if($_POST["inputLogin"]) {
  if(iniciarSesion(strtolower($_POST["inputUsuario"]), $_POST["inputPassword"])) {
    $_SESSION["username"] = strtolower($_POST["inputUsuario"]);
  }
  else {
    $errorLogin = "Error al iniciar sesión, verifique su información: ";
  }
}

if($_GET['logout']){
  $_SESSION['username'] = '';
}
if($_SESSION['username'] && strlen($_SESSION['username']) > 0) {
  if(existeUsuario($_SESSION["username"])) {
    header("Location: inuser.php");
  } else {
    $_SESSION['username'] = '';
  }
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

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
          </button>
          <a class="navbar-brand" href="index.php">Hackaton</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container " >
      <div class="starter-template ">
        <h1 class="text-center col-xs-12" style="color:#ffffff">Inicia sesion</h1>
    </div>
            <form action="index.php" method="post">

          <div class="form-group row">
            <label for="inputUsuario" class="col-xs-2 form-control-label" style="color:#ffffff">Nombre de usuario:</label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="inputUsuario" placeholder="Usuario">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-xs-2 form-control-label" style="color:#ffffff">Contraseña:</label>
            <div class="col-xs-10">
              <input type="password" class="form-control" name="inputPassword" placeholder="Contraseña">
              <input type="hidden" class="form-control" name="inputLogin" value="yes">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-offset-2 col-sm-10">
              <button type="submit" class="btn btn-secondary">Ingresa</button>
              <p class="text-danger">
                <?php
                if(errorLogin) { echo $errorLogin."<br>";}
                 ?>
              </p>
            </div>
          </div>
        </form>
        <div class="col-xs-12" >
          <h1 class="text-center" style="color:#ffffff">Da el primer paso</h1>
          <p class="text-center" style="color:#ffffff">
          Si eres desempleado o buscas el ayudar o emplear a alguien este es el mejor sitio para ti
          </p>
          <p class="text-center" style="color:#ffffff">
            Da tu primer paso ahora, no es necesario que veas el camino completo. Solo da el primer paso. El resto irá apareciendo a medida que camines.
          </p>
          <div class="col-xs-12">
            <button type="button" class="btn btn-primary col-xs-6" style="background-color:#ff6384; height:80px; font-size:25px"><a class="active" href="regext.php" style="color:#ffffff">Empleate!</a></button>
            <button type="button" class="btn btn-primary col-xs-6" style="background-color:#36a2eb; height:80px; font-size:25px"><a class="active" href="registro.php" style="color:#ffffff">Emplea!</a></button>
          </div>
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
