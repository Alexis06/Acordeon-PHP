<?php
//Un array es un mapa

//Array simple
$lugares = [
  "cine" => "cinepolis",
  "restaurante" => "copaCabanito",
  "biblioteca"  => "Vasconcelos",
  "batman" => "batman",
];

//Borrar un elemento
unset($lugares["batman"]);

foreach($lugares as $lugar){

  print('¿Le gustaria visitar: ' .$lugar .'?<br>');
}
//Buena practica
unset($lugar);

//Array Multidimensional
$primerNivel = [
  "lugares" => $segundoNivel = [
      "cine" => "cinepolis",
      "restaurante" => "copaCabanito",
      "biblioteca"  => "Vasconcelos",
  ]
];

//Imprime en pantalla el valor del indice "cine"
print($segundoNivel["cine"]);
