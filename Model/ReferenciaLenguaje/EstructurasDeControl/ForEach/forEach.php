<?php
//Solo se puede usar en objetos y en arrays, este bucle es el que mas se usa para recorrer arrays
$numeros = [
    1,
    2,
    3,
    4,
    5,
];

//ForEch en Arrays
foreach($numeros as $valoresArray){
    print($valoresArray ."<br>");
}
//Se usa para restablecer el indice del bucle y asi los indices vuelva a ser los ya definidos en el array
unset($valoresArray);