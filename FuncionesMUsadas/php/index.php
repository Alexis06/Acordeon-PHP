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
$buscarAPartir = strstr($hola,'a');
print('</br>' .$buscarAPartir);

//preg_match
//Se usa para validar formularios principalmente

$correoUsuario = 'brian.bobi@outlook.com';

if (preg_match('/@/',$correoUsuario) ){//El caracter que se busca debe de ir entre las diagonales

    print('</br> El correo tienen todos sus caracteres especificos "@"');

} else {

  print('</br> Al correo le faltan sus caracteres especificos "@"');
}

//Ahora con modificadores
//i ignora que la palabra este en minusculas o mayusculas
//Podria servir para identificar palabras no permitidas

$texto = 'estupido';

if (preg_match('/estupido/i',$texto) ){//El caracter que se busca debe de ir entre las diagonales

    print('</br> Esa palabra no esta permitida');

} else {

  print('</br>No hay ningun problema');
}

//\b
//Sirve para buscar palabras completas

$texto = 'estupido';

if (preg_match('/\bestupido\b/i',$texto) ){//El caracter que se busca debe de ir entre las diagonales

    print('</br> Esa palabra no esta permitida');

} else {

  print('</br>No hay ningun problema');
}

//Definir la cantidad de caracteres
//'/[^0-10]/'

$comentarioUsuario = 'lorem';

if (preg_match('/[^0-10]/',$comentarioUsuario) ){//Si tiene el numero de caracteres especificados,true

    print('</br>Felicidades tu comentario se ha enviado');
} else{
  print('</br>El comentario rebasa la cantidad de caracteres permitidos.');
}

//Definir los caracteres permitidos
//[^a-z]

if (preg_match('/[^a-z]/',$comentarioUsuario) ){//Si tiene los caracteres especificados,true

    print('</br>Felicidades tu comentario se ha enviado');

} else{

  print('</br>Disculpa tu comentario contiene caracteres no permitidos');

}

//Validar correo electronico

if(filter_var($correoUsuario,FILTER_VALIDATE_EMAIL) ){//Si el correo es correcto:

  print('</br>Información correcta');

} else{

  print('</br>Informacion incorrecta');

}

//Buscar y Remplazar
//str_replace

$cadenaQSeQuiereCambiar = 'Hola mundo, este "Hola mundo esta hecho con PHP."';

$seccionEspecificaQueSeQuiereCambiar =  'Hola mundo, este "Hola mundo esta hecho con PHP."';

$remplazoDeLoQueSeQuiereCambiar = 'Hello Wordl, this "Hello Wordl is made with PHP"';

$cadenaConElCambio = str_replace($seccionEspecificaQueSeQuiereCambiar,$remplazoDeLoQueSeQuiereCambiar,$cadenaQSeQuiereCambiar);

print('<br>' .$cadenaQSeQuiereCambiar);

print('<br>' .$cadenaConElCambio);

//Dividir cadenas de texto y convertirlo en array
//explote

$dividirPalabra = explode(" ",$remplazoDeLoQueSeQuiereCambiar);

print('<br>' .$dividirPalabra[0]);

//Une datos de un array y los convierte en un string
//implode

$unirPalabra = implode(" ",$dividirPalabra);

print('<br>' .$unirPalabra);

//Convertir saltos de lineas a breaks HTML
//nl2br

//$formateado = nl2br($comentarioDelUsuario);

//FUNCIONDES DE FECHA Y HORA
//timestamp es la cantidad de segundos que han pasado desde 01/01/1970 hasta nuestros dias
//time

$hora = time();

print('<br>Es la cantidad de segundos que han pasado desde el 1 de Enero de 1970: ' .$hora);

//getdate
//Tiene los siguientes parametros
/*
Índices:
'hors'
'minutes'
'seconds'
'mday': día del mes en numero
'mon': mes en numero
'wday[0]': dia de la semana, el domingo es 0
'yday': Días transcurridos desde el principio del año
'weekday': día de la semana, palabra completa en ingles
'month': Mes, palabra completa en ingles
*/

$fecha = getdate($hora);

print('<br>' .$fecha['hours']);
print('<br>' .$fecha['weekday']);
