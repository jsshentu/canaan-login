<?php
  require_once("database.php");
  
  //connect to the db
  function get_connection() {
    $connection = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    return $connection;
  }

  //insert into sign_up table
  function insert_into_sign_up($email, $password) {
    global $db_conn;
    $sql = <<<EOD
    INSERT INTO sign_up (email, password, v_password)
    VALUES (:email, :password, :v_password)
EOD;

    $insert = $db_conn->prepare($sql);
    $insert->bindParam(':email', $email, PDO::PARAM_STR);
    $insert->bindParam(':password', $password);
    $insert->execute();
  }
?>
