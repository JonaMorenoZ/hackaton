<?php
include 'misc.php';
$conn = conectarBase();
if($_POST["inputSubmit"] && strcmp($_POST["inputSubmit"], "yes")==0) {
  $username = $_POST["inputUsuario"];
  if(strlen($username) <= 0) {
    $errorUsuario = "Debe ingresar un nombre.";
  }
  $stmt = $conn->prepare("select * from usuario where username = ? ");
  $stmt->bind_param("s", $username);
  $stmt->exec();
  $result = $stmt->get_result();
  $i=0;
  while ($row = $result->fetch_array(MYSQLI_NUM)){
    $i = $i + 1;
  }
  if($i > 0) {
    $errorUsuario = "Este nombre de usuario ya está registrado.";
  }
  $email = $_POST["inputEmail"];
  if(strlen($email) <= 0) {
    $errorEmail = "Debe ingresar un email.";
  }
  $stmt = $conn->prepare("select * from usuario where email = ? ");
  $stmt->bind_param("s", $email);
  $stmt->exec();
  $result = $stmt->get_result();
  $i=0;
  while ($row = $result->fetch_array(MYSQLI_NUM)){
    $i = $i + 1;
  }
  if($i > 0) {
    $errorEmail = "Este email ya está registrado";
  }
  $password = $_POST["inputPassword"];
  if(strlen($password) < 8) {
    $errorPassword = "La contraseña debe tener al menos 8 caracteres.";
  }
  if(!($errorUsuario || $errorEmail || $errorPassword)) {
    $strAl = strAleatorio(20);
    $hash = md5($password.$strAl);
    $stmt = $conn->prepare("insert into usuario(username, strAl, hash, email) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $strAl, $hash, $email);
    $stmt->execute();
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container " >
      <div class="col-xs-12" >
        <h1 class="text-center" style="color:#ffffff">Emplea!</h1>
        <p class="text-center" style="color:#ffffff">
        Este sitio tiene un fin de emplear a aquellas personas que cuentan con algun oficio pero por distintas razones no cuentan con un empleo.
        </p>
        <p class="text-center" style="color:#ffffff">
          Si buscas ayuda a alguien  esta es la solucion , aqui podras buscar y encontrar personas con gran variedad de oficios listos para emplearse y que necesitan de ti
        </p>
      </div>
      <div class="col-xs4">
        <div class="container" style="padding-top: 150px;">
          <div class="starter-template ">
            <h1 class="text-center col-xs-12" style="color:#ffffff">Primer paso</h1>
            <form method="post" action="registrar.php">
          <div class="form-group row">
            <label for="inputUsuario" class="col-xs-2 form-control-label" style="color:#ffffff">Nombre de usuario:</label>
            <div class="col-xs-10">
              <input type="text" class="form-control" name="inputUsuario" placeholder="Usuario">
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
          <input type="hidden" class="form-control" name="inputSubmit" value="yes">
          <div class="form-group row">
            <div class="col-xs-offset-2 col-sm-10">
              <button type="submit" class="btn btn-secondary">Ingresa</button>
            </div>
          </div>
        </form>
          </div>
        </div>
      </div>

    </div>
    <script src="./js/jquery.min.js"></script>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
