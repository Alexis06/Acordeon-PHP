<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
  </head>
  <body>

<!--En este ejercicio puse el código PHP dentro del código HTML y puse en comentario la respuesta del método que no estaba ocupando.-->

    <?php
    /*print('<p class="texto-php">Su nombre de Usuario es:</p>');
    print('<p class="texto-php">');
    print($_GET['user-get']);
    print('</p>');*/
    print('<p class="texto-php">Su nombre de Usuario es:</p>');
    /*Esta parte es la mas curiosa, no pude darle estilos al codigo como de costumbre (como lo que hize con la etiqueta "p"), para poder darle los estilos tuve que imprir las etiquetas con su clase en varios "print".)*/
    print('<p class="texto-php">');
    print($_POST['user-post']);
    print('</p>');
    ?>
  <br>
  <a class="boton-inicio" href="../index.html">Volver a la página de Inicio</a>

  </body>
</html>
