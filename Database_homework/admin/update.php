<?php
include("../login/login/link.php");
if(!empty($_POST))
{
	$classid = $_POST['classid'];
	$date = $_POST['date'];
	$begintime = $_POST['begintime'];
    $endtime = $_POST['endtime'];
	$occupier = $_POST['occupier'];
	$reason = $_POST['reason'];	
	$link->query("SET NAMES 'UTF8'");
    $result=$link->query("INSERT INTO `order`(`classid`, `date`, `reason`, `occupier`,`begintime`,`endtime`) VALUES ('$classid','$date','$reason','$occupier','$begintime','$endtime')");
    if($result)
    {
    	echo "<script>alert('".$classid."教室申请成功')</script>";
    }
}
?>
<html>
<meta charset="utf-8">
<script type="text/javascript">
setTimeout(" window.location.href='./forms.php'",0)
</script>
</html>