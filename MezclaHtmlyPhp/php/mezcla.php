<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mezaclando código</title>
  </head>
  <body>

<h1>En esta página se encuentra código HTML y PHP.</h1>
<?php
//En cualquiera de los casos la dirección del archivo va entre comillas
  require_once 'require_once.php';
  include_once 'include_once.php';
  require 'require.php';
  include 'inlude.php';

  print($texto[1] .' ' .$texto[2] .' ' .$texto[3] .' ' .$texto[4] .' de 4 distintos archivos.');
  //Este es código PHP
?>
  </body>
</html>
