<!DOCTYPE html>

<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAXAefr_BUlJ8D6TsyJugAeOL9ahFg4l_s"></script>
    <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
            <a class="navbar-brand " href="inuserx.php">Hackaton</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li><a href="inuserx.php">Perfil</a></li>
            <li class="active"><a href="about.php">Mapa</a></li>
            <li><a href="search.php">Buscador</a></li>

            <li><a href="about.php">Acerca de</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="index.php">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container col-xs-12" >
        <div id="googleMap" style="width:100%;height:800px;"></div>
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
