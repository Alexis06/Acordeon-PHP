<?php
session_start();
if (isset($_POST['username']) and isset($_POST['userpassword'])){
      $_SESSION['name'] = $_POST['username'];
      $_SESSION['password'] = $_POST['userpassword'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome!</title>
  </head>
  <body>
    <?php
    print('Hello ' .$_SESSION['name']);
  } else {
    ?>
    <h1>Please Complete the following form</h1>
    <form action="index.php" method="post">
      <label for="username">User Name:</label>
        <input type="text" name="username">
     <label for="userpassword">Password:</label>
       <input type="password" name="userpassword">
    <input type="submit" value="Send">
    </form>
    <?php
  } 
     ?>

  </body>
</html>
