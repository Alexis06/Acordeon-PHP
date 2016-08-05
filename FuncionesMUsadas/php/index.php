<?php

/*
Manejo de Caracteres
trim
Limpiar espacios en blanco de un documento de textdomain
$variable = trim($varibleRutaArchivo);

Comparar evitando errores
strtolower
strtoupper
$variable = strtolower($convierteEnMinusculas);
$variable = strtoupper($convierteEnMayusculas);
*/
//Contar cantidad de letras de un texto
//strlen
$hola = 'Hola mundo';
$contar = strlen($hola);
print('La palabra "Hola mundo" tiene ' .$contar .' caracteres');

//Obtener partes de cadenas

//substr
//Cuenta los caracteres y despues los oculta como lo deseemos
$hola = 'Hola mundo';
$ocultar = substr($hola,5);//El ultimo espacio es para esecificar la cantidad de caracteres que queremos ocultar
print('</br>' .$ocultar);

//strpos
//Nos indica el numero de caracter que buscamos
$hola = 'Hola mundo';
$buscar = strpos($hola,'Hola');
print('</br>' .$buscar);

//strstr
//Imprime la cadena desde el caracter especificado
