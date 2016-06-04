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
          <a class="navbar-brand " href="index.php">Hackaton</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container " >
      <div class="col-xs-12" >
        <b><h1 class="text-center" style="color:#25064C; font-size: 70px">Empleate!</h1></b>
        <p class="text-center" style="color:#ffffff">
        Este sitio tiene un fin de emplear a aquellas personas que cuentan con algun oficio pero por distintas razones no cuentan con un empleo.
        </p>
        <p class="text-center" style="color:#ffffff">
          Este sitio pretende ayudar a personas que cuentan con un oficio pero se encuentran desempleadas se parte de esta comunidad
        </p>
      </div>
      <div class="col-xs4">
        <div class="container" style="padding-top: 150px;">

          <div class="starter-template ">
            <h1 class="text-center col-xs-12" style="color:#ffffff">Primer paso</h1>


            <form method="post" action="">

          <div class="form-group row">
            <label for="inputUsuario" class="col-xs-2 form-control-label" style="color:#ffffff">Nombre de usuario*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name=inputUsuario placeholder="Usuario">
            </div>
            <label for="inputNombre" class="col-xs-2 form-control-label" style="color:#ffffff">Nombre(s)*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name=inputNombre placeholder="Nombre">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputApPat" class="col-xs-2 form-control-label" style="color:#ffffff">Apellido Paterno*</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name=inputApPat placeholder="Apellido Paterno">
            </div>
            <label for="inputApMat" class="col-xs-2 form-control-label" style="color:#ffffff">Apellido Materno*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputApMat" placeholder="Apellido Materno">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEstado" class="col-xs-2 form-control-label" style="color:#ffffff">Estado*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputEstado" placeholder="Estado">
            </div>
            <label for="inputMunicipio" class="col-xs-2 form-control-label" style="color:#ffffff">Municipio*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputMunicipio" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputCalle" class="col-xs-2 form-control-label" style="color:#ffffff">Calle*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputCalle" placeholder="Calle">
            </div>
            <label for="inputNum" class="col-xs-2 form-control-label" style="color:#ffffff">Numero Exterior*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputNum" placeholder="Numero Exterior">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputNumInt" class="col-xs-2 form-control-label" style="color:#ffffff">Numero Interior:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputNumInt" placeholder="Numero Interior">
            </div>
            <label for="inputCP" class="col-xs-2 form-control-label" style="color:#ffffff">Codigo Postal:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputCP" placeholder="Codigo Postal">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputColonia" class="col-xs-2 form-control-label" style="color:#ffffff">Colonia*:</label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="inputColonia" placeholder="Colonia">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEdad" class="col-xs-2 form-control-label" style="color:#ffffff ">Edad*:</label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="inputEdad" placeholder="Edad" style="width:65px ">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2" style="color:#ffffff">Genero*:</label>
            <div class="col-sm-10">
              <div class="radio">
                <label>
                  <input type="radio" name="inputGenero" id="gridRadios1" value="1" checked >
                  <p style="color:#ffffff">Femenino</p>
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="inputGenero" id="gridRadios2" value="2" >
                <p style="color:#ffffff">Masculino</p>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputTel" class="col-xs-2 form-control-label" style="color:#ffffff">Telefono*:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputTel" placeholder="Telefono">
            </div>
            <label for="inputTel2" class="col-xs-2 form-control-label" style="color:#ffffff">Telefono 2:</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="inputTel2" placeholder="Telefono 2">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPerfil" class="col-xs-2 form-control-label" style="color:#ffffff">Perfil*:</label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="inputPerfil" placeholder="Colonia" style="height:100px">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-xs-2 form-control-label" style="color:#ffffff">Email:</label>
            <div class="col-xs-10">
              <input type="email" class="form-control" name="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-xs-2 form-control-label" style="color:#ffffff">Contraseña:</label>
            <div class="col-xs-10">
              <input type="password" class="form-control" name="inputPassword" placeholder="Contraseña">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-offset-2 col-sm-10">
              <button type="submit" class="btn btn-secondary">Registrate!</button>
            </div>
          </div>
        </form>
          </div>
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
