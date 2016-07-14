<?php
//Las cookies van hasta arriba del código SIEMPRE!
/*Los argumentos que necesita el cookie van dentro de la función "setcookie" y los parametros son nombre, valor, duración (la duración es por segundos), ruta, dominio, seguridad, separados por ","*/ 
setcookie('user','Alexis');
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>

<?php

if(isset ($_COOKIE['user'] ) ){
  print('El valor de esta cookie es: <br>');
  print($_COOKIE['user']);
} else{
  print('Aun no se define la cookie, debes de recargar la página.');
}
?>
  </body>
</html>
