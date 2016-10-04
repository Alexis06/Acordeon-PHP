<?php

//Trabajar con Archivos de texto
/*
Para abrir los Archivos de Texto usamo la función 'fopen'
La funcion necesita dos parametros:
La ruta y el modo de apertura.

Modos:
r = Read
w = Write
a = Append
r+ = Read (Añade datos y permite leerlos)
w+ = Write (Escribir y despues leer)
a+ = Append (Abre para añadir y leer)
*/

//Así se abre el archivo
$ruta = 'texto.txt';
$abierto = fopen($ruta , 'r');

//Cerramos el archivo
fclose($abierto);








?>
