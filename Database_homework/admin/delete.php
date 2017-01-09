 <?php
	include("../login/login/link.php"); 
	$classid = $_POST['classid'];
	$date = $_POST['date'];
	$begintime = $_POST['begintime'];
    $endtime = $_POST['endtime'];
	if($link)
	{
		$link->query("SET NAMES 'UTF8'");
		$result = $link->query("DELETE FROM `order` WHERE classid = '$classid' and `date` = '$date' and begintime = '$begintime' and endtime = '$endtime'");
		if($result)
			echo "<script>alert('退报成功！')</script>";
	}

 ?>
 <!DOCTYPE html>
<html>
<meta charset="utf-8">
<script type="text/javascript">
setTimeout("window.location.href='./backat.php'",0)
</script>
</html>