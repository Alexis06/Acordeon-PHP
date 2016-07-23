<?php
#Bucle While
//El Bucle While es el que trabaja con valores Booleanos y se utiliza cuando queremos iniciar un ciclo dependiente a una posibilidad.

/*Su sintaxis es la siguiente:
Se inicia el while, dentro de los parentesis iran dos funciones: 'list' y 'each'.
list, guarda los datos que lee la función 'each' en nuevas variables
each, lee los elementos de una matriz, el indice y el valor de las casillas que contiene
*/
print('<h1>While con list y each:</br></h1>');
$_POST = array('nombre' => 'Alexis', 'edad' => 16, 'estado civil' => 'soltero' );

while (list ($key , $value) = each($_POST)){
          print('El indice es: ' .$key .' y su valor es: ' .$value .'</br>');
}
print('<h1>While sencillo:</br></h1>');

$numero = 0;

while ($numero<=16) {
          print($numero++);
}

?>
