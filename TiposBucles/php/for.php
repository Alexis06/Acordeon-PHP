<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bucle For</title>
</head>
<body>

<h1>Bucle For</h1>
<?php
/*El Bucle For
Sirve para repetir una accion.
Para contruir un bucle de este tipo, debe de tener los siguientes elementos:
1.-Inicializar la variable.
2.-Se evalua la variable (se le da una condición), es donde definiremos la cantidad de veces que queramos repetir un dato.
3.-Se modifica la varible, aqui definimos si el bucle va en aumento o en decremento.*/

for ($dia=1; $dia <=31 ; $dia=$dia+1) {
      print('Hoy es el día ' .$dia .'</br>');
}
 ?>
 <h1>Bucle For con Matrices</h1>

<?php
/*Se declara primero el array.
Creamos una variable que almacena la funcion "count" que nos dira la cantidad de datos que tenemos dentro del array.
Despues declararemos el Bucle For:
Inicializamos el bucle con la varible numero_de_reyMago con valor de 1.
Declaramos la variable a evaluar, en donde declaramos la condición para que se ejecute el bucle que es que $numero_de_reyMago sea menor o igual a la variable $cantidad.
Y por ultimo modificamos la varible $numero_de_reyMago, en donde decimos que $numero_de_reyMago es igual a $numero_de_reyMago más 1, esta condición lo que hara sera aumentar de uno en uno el valor actual de la varible.
Por ultimo, lo que va imprimir, si es que cumple con la evalucion (condición) es:
('El rey Mago numero: ' .$numero_de_reyMago .'  es: ' .$reyes_magos[$numero_de_reyMago] .'</br>')

Al imprimir hacemos uso de dos variables $numero_de_reyMago que nos imprimira el número y el array $reyes_magos[y aquí dentro tendra la variable $numero_de_reyMago]
*/
$reyes_magos = array(1=> 'Melchor', 'Gaspar', 'Baltazar' );

$cantidad= count($reyes_magos);

 for ($numero_de_reyMago=1; $numero_de_reyMago<=$cantidad; $numero_de_reyMago=$numero_de_reyMago+1) {
      print('El rey Mago numero: ' .$numero_de_reyMago .'  es: ' .$reyes_magos[$numero_de_reyMago] .'</br>');
 }


?>
 </body>
</html>
