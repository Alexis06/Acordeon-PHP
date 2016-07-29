<?php
#Técnica de la señal o Flag
/*1.-Se declara una matriz o variable
2.- Se crea un Bucle que tiene dentro un codicional que posiblemente cambie el valor inicial de la variable
3.- Se cierra el Bucle y con un condicional verificamos si se realizo la accion que queriamos */

$productos = array(1 => 'Computadoras' , 'Celulares', 'Tlabets' );
$casillas = count($productos);
for ($numero = 1; $numero <= $casillas; $numero = $numero++ ){
      if ($numero == ""){
        print($numero);
      } else{
        print('No se ha encontrado el valor del array');
      }
}
 ?>
