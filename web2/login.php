<?php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

// do authentication here
$con = mysql_connect("localhost","root","090015");
mysql_select_db("web_db", $con);
$result = mysql_query("SELECT * FROM Login");
$ok=0;
while($row = mysql_fetch_array($result))
  {
	if($row['Student_id']==$username && $row['Password']==$password)
	$ok=1;
  }

if (ok==0) header("Location: index.php");

setcookie("mycookie_name", $username);
setcookie("count", ++$count);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
Welcome <? echo $_POST["name"] ?>!<br/>
You have visited the site <? echo $count ?> times.
<a href="logout.php">logout</a>
</body>
</html>
