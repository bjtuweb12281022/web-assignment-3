<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
  <?php
  $username = $_POST["name"];
$password = $_POST["password"];
  $con = mysql_connect("localhost","root","090015");
  mysql_select_db("web_db", $con);
	$result = mysql_query("SELECT * FROM Login");
	mysql_query("INSERT INTO Login VALUES (Student_id,Password))
	VALUES ($username, $password)");

      ?>
  
</body>
</html>
