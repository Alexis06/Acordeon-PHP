<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Bitter:700" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" media="screen">
    <title>Funcion de Hipotenusa</title>
  </head>
  <body>

    <section>

      <h1>Encontrar la hipotenusa:</h1>

      <form class="box-principal" action="index.php" method="post">

        <div class="lab">
          <label for="cantidad1">Cateto Mayor</label>
            <input class="inp-num" type="text" name="cantidad1">
        </div>

        <div class="lab">
          <label for="cantidad2">Cateto Menor</label>
            <input class="inp-num" type="text" name="cantidad2">
        </div>

        <input class="inp-submit" type="submit" value="Enviar!">
      </form>

      <?php

      include ('funciones.php');

      if (isset($_POST['cantidad1']) and isset($_POST['cantidad2'])){

          $resultado = hipotenusa($_POST['cantidad1'],$_POST['cantidad2']);

       ?>

      <p class="result-text">

        <?php
            print('El resultado es: ' .$resultado);

          }?>
      </p>

   </section>

  </body>
</html>
