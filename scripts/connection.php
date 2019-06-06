<?php
  require_once("database.php");
  
  function get_connection() {
    $connection = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    return $connection;
  }
?>
