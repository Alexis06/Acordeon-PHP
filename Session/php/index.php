<?php  session_start();
//Se ha iniciado una sesion por lo que hay un archivo que contiene los datos de la sesion.


$_SESSION['name']='Alexis';

print('Welcome ' .$_SESSION['name']);

?>
