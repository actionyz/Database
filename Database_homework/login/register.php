<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
</body>
</html>
<?php 
$userid = $_POST['userid'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$identity = $_POST['identity'];
$section = $_POST['section'];


include("./login/link.php");
if($link)
{
	$link->query("SET NAMES 'UTF8'");
//	$result = $link->query("SELECT * FROM `user` WHERE username = '$username'");
	$insert=$link->query("INSERT INTO user VALUES ('$userid','$username','$pass','$identity','$section')");
	echo "<script>alert('注册成功')</script>";
}
else
{
	echo "连接失败！";
}
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
setTimeout(" window.location.href='./user/demo.php'",0)
</script>
</html>