<?php
/*El programa dice lo siguiente:
Si la matriz "POST" con valor "name" existe, vamos a crear una cookie, de nombre "userName", con el valor de la matriz "$_POST['name']" y le daremos una duración con la variable "timeCookie".
El valor de la matriz "$_POST['name']" sera asignado al completar el formulario.
En resumen:
Cuando exista la matriz "$_POST['name']", esta se convertira en el valor de la Cookie "userName" e imprimira el valor de la matriz.
Y si no se cumple la condición imprimiremos un texto en donde se solicite que complete el formulario.
*/
//Recibir la variable $name de un formulario.
if (isset($_POST['name']) ){
    //Cookie
    $timeCookie=60*60*24*31;
    setcookie('userName', $_POST['name'], time($timeCookie));
    //Programa exitoso
        print('Hello again! ' .$_POST['name']);
} else{
  print('Debes de usar un User Name:');
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Welcome!</title>
   </head>
   <body>

     <form action="index.php" method="post">
       <label for="name">Usuario:</label>
          <input type="text" name="name">
      <input type="submit" value="Send">
      </form>

   </body>
 </html>
