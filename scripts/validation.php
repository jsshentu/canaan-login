<?php
  //check if the email format is vaild
  function check_email_format($email_address) {
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $email_address) === 1;
  }

  //check if the passwords match, used for sign-up
  function check_password($pass1, $pass2) {
    return trim($pass1) === trim($pass2);
  }

  //check if the string length is greater than a certain number
  function length_greater_than($str, $min) {
    return strlen(trim($str)) >= $min;
  }

  //check if the string length is less than a certain number
  function length_less_than($str, $max) {
    return strlen(trim($str)) <= $max;
  }

  //check for length in a range
  function check_password_length($password) {
    return length_less_than($password, 20) && length_greater_than($password, 6);
  }
  //check if the string length is equal to a certain number
  function length_equal_to($str, $num) {
    return strlen(trim($str)) === $num;
  }

  function add_single_quote($str){
    return "'" . $str . "'";
  }

  //check if the email has already been used
  function check_unique_email($table, $email, $id=0) {
    global $db_conn;
    $sql;
    $condition = <<<EOD
      WHERE email = :email
      AND id != :id
EOD;
    if($table === "register"){
      $sql = <<<EOD
        SELECT *
        FROM register
EOD;
      $sql .= $condition;
    } else {
      $sql = <<<EOD
        SELECT *
        FROM sign_up
EOD;
      $sql .= $condition;
    }
      $db = $db_conn->prepare($sql);
      $db->bindParam(':email', $email, PDO::PARAM_STR);
      $db->bindParam(':id', $id, PDO::PARAM_INT);
      $db->execute();
      $num = $db->rowCount();
      return $num === 0;
  }

  //check if password is correct
  function verify_password($email, $password) {
    global $db_conn;
    $sql = <<<EOD
    SELECT password
    FROM sign_up
    WHERE email = :email
EOD;
    
    $db = $db_conn->prepare($sql);
    $db->bindParam(':email', $email, PDO::PARAM_STR);
    $result = $db->execute();
    $p_arr = $db->fetch(PDO::FETCH_ASSOC);
    $pass = $p_arr["password"];
    return $pass === $password;
  }

  //output the errors
  function list_errors($errors_arr) {
    if(sizeof($errors_arr)) {
      foreach($errors_arr as $error) {
        echo "<li style='color:red;'>" . $error . "</li>";
      }
    }              
  }
