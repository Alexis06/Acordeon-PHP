<?php

#each
//Guarda el indice de una matriz dentro de una matriz.
/*Hace uso de palabras restringidas: 'key' y 'value'
'key' es el indice de la matriz con la que trabajamos, también podemos escribir su valor alfanumerico dependiendo si es una matriz ordena o desordenada.
'value' es valor del valor de la matriz con la que trabajamos.

*/
$datos_nombre ['nombre'] = 'Alexis';
$datos_edad ['edad'] = 16;

$datosN = each($datos_nombre);
$datosE = each($datos_edad);


/*print($datos [0] .'</br>');
print($datos ['key'] .'</br>');
print($datos ['value'] .'</br>');
*/

print('El indice: ' .$datosN['key'] .' guarda al valor: ' .$datosN['value'] .'</br>');
print('El indice: ' .$datosE['key'] .' guarda al valor: ' .$datosE['value']);
 ?>
