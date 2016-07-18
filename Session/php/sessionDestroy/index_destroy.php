<?php

session_start();

if(isset($_POST['user'])){
    $_SESSION['name']=$_POST['user'];

    print('Welcome ' .$_POST['user']);
} else{
  print('Please complete the form <a href="form_index_destroy.php">Form</a>');
} //Enviamos la funcion session destroy por un enlace, cuando se llegue al destino del enlace la session quedara destruida.
print('<a href="other.php" <?php echo session_destroy(); ?> Other Page</a>')

 ?>
