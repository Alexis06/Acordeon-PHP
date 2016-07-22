<?php
print('<h1>Concepto del Contador</h1>');
#Concepto del Contador
//Se inicializa la variable, luego a la misma variable se le hace un incremento o un decremento, esto cambiara su valor.
$numero = 0;

$numero = $numero +1; //Estoy diciendo que sume 1 al valor actual de la variable
print($numero);

print('<h1>Concepto del Acumulador</h1>');
#Concepto de Acumulador
//Se inicializa la variable y despues se le suma una variable o numero. La variable va guardado los cambios despues de haber sido modificada.
$numeroA = 0;

$numeroA += $numeroB = 15;

print($numeroA .'</br>');

$numeroA +=$numeroC =15;

print($numeroA);
?>
