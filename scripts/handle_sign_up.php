<?php

  require_once("initialize.php");

  $errors = []; 

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];
    
    if(!check_email_format($email)){
      array_push($errors, "Email格式不正确");
    }   
    
    if(!check_password_length($password)){
      array_push($errors, "密码最少6位，最多20位，不可有空格"); 
    }   
    
    if(!check_password($password, $repeat_password)){
      array_push($errors, "两次密码输入不同，请重新输入");
    }   

    if(!check_unique_email("sign_up", $email)){
      array_push($errors, "该邮箱已经被注册，请使用其他邮箱注册");
    }

    if(empty($errors)) {
      $result = insert_into_sign_up($name, $birthday, $email, $password);
      if($result) {
        header('Location: successful.html');
        exit;
      } else {
        header("Location: failed.html");
        exit;
      }   
    }   
  } 
