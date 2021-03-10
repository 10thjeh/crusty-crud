<?php
  ob_start();
  session_start();
  if(!isset($_SESSION['user'])){
    echo "<script>window.location.replace('login.php')</script>";
  }

  if(isset($_POST['logout'])){
    session_destroy();
    echo "<script>window.location.replace('login.php')</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
  </head>
  <body>
    <h1>Welcome admin <?php echo "{$_SESSION['user']}";?></h1>
    <h1>Your role is <?php echo "{$_SESSION['role']}" ?></h1>
    <form action="" method="post">
      <input type="submit" name="logout" value="logout">
    </form>
  </body>
</html>
