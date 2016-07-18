<?php

session_start();

//Solo borrare los datos guardados en variables de sesion con "unset"

if (isset($_SESSION['name']) and (isset($_SESSION['street'] ) ) ){
  unset($_SESSION['name']);
  unset($_SESSION['street']);

  print($_SESSION['name'] .$_SESSION['street']);
} else{
  print('Plase complete the <a href="form.php">form</a>');
}


 ?>
