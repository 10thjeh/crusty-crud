<?php
session_start();
session_destroy();
unset($_SESSION['user']);
echo "<script>window.location.replace('../login.php')</script>";
 ?>
