<?php
  require_once("scripts/handle_login.php");  
?>

<!DOCTYPE html>
<html>
<head>
  <title>迦南教育信息中心</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
  <div>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">迦南教育信息中心</span>
    </nav>
  </div>
  <div id="bd-img-container">
    <div>
      <form action="index.php" method="post" class="form-container">
        <h2>请登录</h2>
        <ul>
          <?php
            echo "<br>";
            list_errors($errors);
            unset($errors);
          ?>
        </ul>
        <label for="email"><b>邮箱</b></label>
        <input type="text" placeholder="输入邮箱" name="email" required>
        <br>
        <label for="password"><b>密码</b></label>
        <input type="password" placeholder="输入密码" name="password" required>
        <button type="submit" class="btn-login">登录</button>
        <br>
        <br>
        <hr>
        <br>
        <h2>新用户</h2>
        <br>
        <button type="submit" class="btn-signup" onclick="window.location.href='pages/sign-up.php';">注册</button>
        <br>
        <br>
        <hr>
        <br>
        <h2>讲座试听</h2>
        <br>
        <button type="submit" class="btn-signup" onclick="window.location.href='pages/register.php';">免费注册</button>
      </form>
    </div>
  </div>
</body>
</html>
