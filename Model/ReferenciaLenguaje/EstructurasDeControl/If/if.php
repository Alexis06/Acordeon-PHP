<?php

$numero = 3;

//If simple
if($numero == 5){
    print("Son numeros iguales<br>");
}else{
  print("Son numeros diferentes<br>");
}

//if multiple
if($numero == 3){
  print("El numero es 3<br>");
}elseif($numero == 4){
  print("El numero es 4<br>");  
}elseif($numero == 5){
  print("El numero es 5<br>");  
}else{
  print("El numero que ingresaste es incorrecto<br>");  
}

//if enlazados
if($numero == 5){
  if($numero === '5'){
    print("Tu numero es correcto<br>");
  }else{
    print("Tu numero si es 5 pero no es '5'<br>");
  }
}else{
  print("Tu numero no es 5");
}
?>
