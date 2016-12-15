<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Define</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
  </head>
  <body>
      <?php
        //Son varibles que nunca cambiaran su valor
        print('<div class="letras">');
        print('<p>');
        define('nombreAutor', 'Alexis');/*Los strings van entre comillas sin importar si es el nombre de la constante, pero al imprimir solo se pondra el nombre de la constante (sin comillas). EL PRIMER CAMPO ES EL NOMBRE DE LA CONSTANTE*/
        print('El Autor de este codigo es: ' .nombreAutor);
        print('</p>
        </div>');
      ?>
  </body>
</html>
