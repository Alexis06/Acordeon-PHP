<?php
session_start();

if (isset($_POST['user']) and (isset($_POST['direction'] ) ) ){
    $_SESSION['name']=$_POST['user'];
    $_SESSION['street']=$_POST['direction'];

    print('<a href="page_end.php" ?php echo $_SESSION["name"]; echo $_SESSION["street"];  ?>Page end</a>');
} else{
  print('Plase complete the <a href="form.php">form</a>');
}

 ?>
