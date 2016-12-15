<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Matrices</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
  </head>
  <body>

<?php
  //Las Matrices son muchos datos provisorios
  $numeros[]=1;
  $numeros[]=5;
  $numeros[]=975939;
  /*Las matrices tiene una declaración (la que va dentro de los corchetes). Dependiendo del valor que le demos a la declaración mandaremos a llavar a la matríz*/
  //Matrices con declaración explicita
  $meses[1]='Enero';
  $meses[2]='Febrero';
  //Matrices con declaración implicita, en estas la declaración comienza en 0
  $nombreRey_mago[]='Melchor';
  $nombreRey_mago[]='Gaspar';
  $nombreRey_mago[]='Baltazar';
  //Matrices Alfanumericas
  $numeroRey_mago['Melchor']=1;
  $numeroRey_mago['Gaspar']=2;
  $numeroRey_mago['Baltazar']=3;

  print('<div class="letras"><p>El ' .$numeros[1] .' de ' .$meses[1] .' llega el Rey Mago número ' .$numeroRey_mago['Melchor'] .'(' .$nombreRey_mago[0]) .').</p></div>';
  //El 5 de Enero llega el Rey Mago número 1(Melchor).


 ?>

  </body>
</html>
