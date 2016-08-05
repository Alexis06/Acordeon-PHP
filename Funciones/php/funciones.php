<?php 
//Se cra una función "cuadrado"
//Esta función evaluara a la variable $numero
//Se crea una variable $total que almacena la multiplicación  de $numero por $numero
//Retorna un total
//La función sirve para elevar un número al cuadrado
function cuadrado ($numero){
              $total = $numero * $numero;
              return $total;
}

function hipotenusa ($num1, $num2){
              $pitagoras = sqrt( pow($num1,2) + pow($num2,2) );
              return $pitagoras;
}
