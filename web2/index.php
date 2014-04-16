<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
  <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
	</br>
    <button  style="height:30px;width:80px"type="submit">登录</button>
  </form>
  <form action="signin.php" method="post">
    Name : <input type="text" name="name"/>
    Password : <input type="password" name="password"/>
	</br>
    <button  style="height:30px;width:80px"type="submit">注册</button>
  </form>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>
