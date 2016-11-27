<?php
$page = $_SERVER['PHP_SELF'];
$sec = 2;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="<?php echo $sec ?>;" URL="<?php echo $page ?>" charset="utf-8">
        <title>View</title>
        <!--Normalize-->
        <link rel="stylesheet" href="../controller/css/normalize.css" media="screen">
        <!--Layout-->
        <link rel="stylesheet" href="../controller/css/layout.css" media="screen">
    </head>
    <body>
        <?php

            include '../model/model.php';

            $Clase1IV1 = new Grupo1ro();//Este es un nuevo objeto que ereda la clase Grupo, esto quiere decir que el nuevo objeto hereda las propiedades y funciones de la clase, almacenado en una variable

            $Clase1IV1->conteoSillas(10,2);//Se llama a una función predefinida de la clase, la sintaxis es: $vQAlmacenaObjeto->metodo que queremos

            $Clase1IV5 = new Grupo5to();//Este es un objeto con metodos y propiedades heredados

            $Clase1IV5::conteoSillas(12,2);

            echo "</br>" .$Clase1IV5::texto ."</br>";//Se accdede a un elemento constante
        ?>
    </body>
</html>
