<?php
  require_once("database.php");
  
  //connect to the db
  function get_connection() {
    $connection = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    return $connection;
  }

  //insert into sign_up table
  function insert_into_sign_up($name, $birthday, $email, $password) {
    global $db_conn;
    $sql = <<<EOD
    INSERT INTO sign_up (name, birthday, email, password)
    VALUES (:name, STR_TO_DATE(:birthday, '%Y-%m-%d'), :email, :password)
EOD;

    $insert = $db_conn->prepare($sql);
    $insert->bindParam(':name', $name, PDO::PARAM_STR);
    $insert->bindParam(':birthday', $birthday, PDO::PARAM_STR);
    $insert->bindParam(':email', $email, PDO::PARAM_STR);
    $insert->bindParam(':password', $password, PDO::PARAM_STR);
    return $insert->execute() ? true : false;
  }
  
  function insert_into_register($name, $birthday, $email, $cellphone, $topic){
    global $db_conn;
    $sql = <<<EOD
    INSERT INTO register (name, birthday, email, phone, topic)
    VALUES (:name, STR_TO_DATE(:birthday, '%Y-%m-%d'), :email, :phone, :topic)
EOD;

    $insert = $db_conn->prepare($sql);
    $insert->bindParam(':name', $name, PDO::PARAM_STR);
    $insert->bindParam(':birthday', $birthday, PDO::PARAM_STR);
    $insert->bindParam(':email', $email, PDO::PARAM_STR);
    $insert->bindParam(':phone', $cellphone, PDO::PARAM_STR);
    $insert->bindParam(':topic', $topic, PDO::PARAM_STR);
    return $insert->execute() ? true : false;
  }
?>
