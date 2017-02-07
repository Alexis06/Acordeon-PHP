<?php
//Enumerar las sillas dependiendo del numero de alumnos
$numeroAlumnos = 20;

//Siempre declarar el iterador
$i = 1;

/*
En este caso quiero que siempre se cumpla la condicion por lo que hago que i sea menor o igual
a numeroAlumnos
*/
while($i <= $numeroAlumnos){
    print("Silla numero: " .$i ."<br>");
    $i++;
}

//Recorrer un array con un while
$numeros =[
    1,
    2,
    3,
    4,
    5
];

print("Estoy recorriendo un array:<br>");
/*
Funcion list:
Asigno un indice global al array y sobre escribe el que tiene por defecto.
Funcion each:
Indico el nombre del array que quiero definir
Depues:
Incremento los valores del indice para recorrer de forma correcta el array.
Por ultimo creo una estructura condicional en la que especifico que hasta cierta cantidad en la
que se encuentre el indice se rompera el recorrido del array
*/
while( list(,$valores) = each($numeros) ){
    print($valores++ ."<br>");
    if($valores == 4){
        break;
    }
}
//Buena practica, lo uso para devolver al array sus indices por defecto
unset($valores);