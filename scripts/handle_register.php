<?php
  require_once("initialize.php");
  
  $errors = [];
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $cellphone = $_POST["cellphone"];
    $topic = $_POST["topic"];

    if(!check_email_format($email)){
      array_push($errors, "Email的格式不正确");
    }
    /*
    if(!check_unique_email("register", $email)){
      array_push($errors, "该邮箱已经注册，请使用其他邮箱注册");
    }
    */

    $output = check_unique_email("register", $email);
    echo $output;
    if(empty($errors)) {
      $result = insert_into_register($name, $birthday, $email, $cellphone, $topic);
      if($result){
        //echo "<h1>" . $output . "</h1>";
        header('Location: successful.html');
        exit;
      } else {
        //echo "<h1>" . $output . "</h1>";
        header('Location: failed.html');
        exit;
      }
    }
  } 
?>
