<?php
  require_once("../scripts/handle_sign_up.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>迦南教育信息中心</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
  <div>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">迦南教育信息中心</span>
        <span><a href="../index.php">返回首页</a></span>
    </nav>
  </div>
  <div id="bd-img-container">
    <div>
      <form  action="sign-up.php" method="post" class="form-container">
        <h2>新用户注册</h2>
        <div>
          <ul>
            <?php
              echo "<br>";
              list_errors($errors);
              unset($errors);
            ?>
          </ul>
        </div>
        <label for="name"><b>姓名</b></label>
        <input type="text" placeholder="输入姓名" name="name" required>
        <br>
        <label for="birthday"><b>生日</b></label>
        <input type="text" placeholder="格式: 年-月-日, 如: 2001-05-31  1987-11-06" name="birthday" required>
        <br>
        <label for="email"><b>邮箱</b></label>
        <input type="text" placeholder="输入邮箱" name="email" required>
        <br>
        <label for="password"><b>密码</b></label>
        <input type="password" placeholder="密码最少6位，最多20位，不可包含空格" name="password" required>
        <br>
        <label for="repeat_password"><b>确认密码</b></label>
        <input type="password" placeholder="确认密码" name="repeat_password" required>
        <button type="submit" class="btn-login">确定</button>
      </form>
    </div>
  </div>
</body>
</html>
