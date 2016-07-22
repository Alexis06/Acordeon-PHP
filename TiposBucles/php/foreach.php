<?php
#Bucle Foreach
//Su unica utilidad es la de recorrer matrices.
//A diferencia de For que solo puede trabajar con matirces de indices ordenados y númericos, Foreach puede trabajar con indices desordenados/ordenados y alfanumericos/numericos.

/*Su sintaxis es la siguiente:
Se llama a la matriz que queremos usar luego decimos que esa matriz es igual a la siguiente variable, con la segunda variable debemos de imprimir el resultado.*/

$meses = array(0=>'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

foreach ($meses as $mes) {
            print($mes .'</br>');
}



 ?>
