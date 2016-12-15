<?php

    if ($_GET['user']){
        $nameUser=$_GET['user'];
    } else{
      print('No ha especificado su nombre de usuario, vuelva la página de <a href="../index.html">Inicio</a>');
    }
    if ($_GET['gender'] == 'masculino'){
      print('Gracias, ' .$nameUser .' por especificat tú género');
      print(' <a href="../index.html">Inicio</a>');
    } elseif($_GET['gender'] == 'femenino'){
        print('Gracias, ' .$nameUser .' por especificat tú género');
        print(' <a href="../index.html">Inicio</a>');
    } else{
      print( $userName .' debes de especifica su género');
      print(' <a href="../index.html">Inicio</a>');
    }
?>
