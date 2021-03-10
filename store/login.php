<?php
  ob_start();
  session_start();
  require 'configs/connection.php';
  // if(isset($_SESSION['user'])){
  //     // header('Location : ../admin.php');
  //     echo "<script>window.location.replace('index.php')</script>";
  // }

  if(isset($_POST['login'])){
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          $query = "SELECT * FROM users WHERE username = :username AND password = :password";
          $prep = $conn->prepare($query);
          $prep->bindParam(":username", $username);
          $prep->bindParam(":password", $password);
          $prep->execute();
          $isExist = $prep->fetch(PDO::FETCH_ASSOC);
          if($isExist){
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $isExist['role'];
            echo "<script>window.location.replace('index.php')</script>";
            //header('Location : ../index.php');
          }
          else{
             //header('location : ../login.php?pesan=gagal');
              $_SESSION['error'] = "<font color='red' size='4 px'>Username atau password salah</font>";
          }
      }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- bootstrap css --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
            font: 14px sans-serif;
            background-image: url('bg2.png');
            }
        .wrapper{
            background-color: #251A4E;
            font: 14px Times New Roman;
            width: 300px;
            padding: 20px;
            margin-top:100px;
            margin-bottom:100px;
            margin-left:auto;
            margin-right:auto;
            border: 2px solid gold;
            border-radius: 12px;
            }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h2 style="margin-left:57px; color:gold;">Crusty Crud</h1>
      <h2 style="margin-left:53px; color:gold;">Admin Login</h1>
      <p style="margin-top:30px;color:red;">Isilah data dengan lengkap</p>
    <form action="" method="post">
      <div class="form-group">
        <label for="username" class="form-label" style="color:white;">Admin Username</label>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <div class="form-group">
        <label for="password" class="form-label" style="color:white;">Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>


      <button type="submit" name="login" class="btn btn-primary">Submit</button>

    </form>
    <?php

        if(isset($_SESSION['error'])){
           /*if($_GET['pesan'] == "gagal"){
               echo "<font color='red' size='5 px'>Username atau password salah</font>";
           }*/

            $error = $_SESSION["error"];
            unset($_SESSION["error"]);
            echo "<span>$error</span>";
        }
       ?>
    </div>

    <!-- bootstrap js--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
