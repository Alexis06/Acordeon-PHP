<?php
//Se utiliza para cerrar for, foreach, while, do-while y switch

//for
print("Break desde For<br>");
//Solo creo una estructura condicional que me permita establecer un limite fijo con ayuda de break
for($i = 1; $i <= 10; $i++){
    print($i ."<br>");
    if($i == 10){
        break;
    }
}

//foreach
print("Break desde ForEach<br>");
//Creo un array porque foreach solo sirve para recorrer arrays
$numeros = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10
];
//Solo creo una estructura condicional que me permita establecer un limite fijo con ayuda de break
foreach($numeros as $valores){
    print($valores++ ."<br>");
    if($valores == 10){
        break;
    }
}
unset($valores);

//while
print("Break desde While<br>");
//Solo creo una estructura condicional que me permita establecer un limite fijo con ayuda de break
$numeros =[
    1,
    2,
    3,
    4,
    5
];

while( list(,$valores) = each($numeros) ){
    print($valores++ ."<br>");
    if($valores == 4){
        break;
    }
}
//Buena practica, lo uso para devolver al array sus indices por defecto
unset($valores);

//Do-While => Lo odio

$cantidad = 1;

//Switch
print("Usando Switch:<br>");
switch($cantidad){
    case 1:
    print("No es 2");
    break;    
    case 2:
    print("Es 2");
    default:
    break;
}