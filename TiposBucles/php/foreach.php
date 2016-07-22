<?php
#Bucle Foreach
//Su unica utilidad es la de recorrer matrices.
//A diferencia de For que solo puede trabajar con matirces de indices ordenados y númericos, Foreach puede trabajar con indices desordenados/ordenados y alfanumericos/numericos.

//Tiene dos sitaxis posibles

/*La primer sintaxis es la siguiente:
Se llama a la matriz que queremos usar luego decimos que esa matriz es igual a la siguiente variable, con la segunda variable debemos de imprimir el resultado.
Esta solo mostrara el valor de las celdas.*/

$meses = array(0=>'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

foreach ($meses as $mes) {
            print($mes .'</br>');
}

/*La segunda sintaxis es la siguiente:
Se llama a la matriz que queremos usar luego decimos que esa matriz es igual a la siguiente variable, con la segunda variable debemos de imprimir el resultado.
Esta mostrara el valor de las celdas y el valor de los indices*/

$meses = array(1=>'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

foreach ($meses as $mes => $indice) {
            print($mes .'es el ' .$indice .'</br>');
}

 ?>
