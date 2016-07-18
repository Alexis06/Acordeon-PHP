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
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
  </head>
  <body>

<?php
print('<div class="resultado">');
if(isset ($_COOKIE['user'] ) ){
  print('El valor de esta cookie es: <br>');
  print($_COOKIE['user']);
} else{
  print('Aun no se define la cookie, debes de recargar la página.');
}
print('</div>');
?>
  </body>
</html>
