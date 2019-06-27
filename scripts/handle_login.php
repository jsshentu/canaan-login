<?php
  require_once("initialize.php");
  
  $errors = [];

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if(!verify_password($email, $password)){
      array_push($errors, "邮箱或者密码错误，请再试一次。如果您已经忘记邮箱或者密码，请通过微信联系迦南教育的老师，谢谢!");
    }

    if(empty($errors)){
      header("Location: pages/menu.html");
      exit;
    }
  }
