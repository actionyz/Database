<?php
	require('conn.php');
	session_start();
	$query_user="select * from user where username = '$username' and pass = '$passwd'";   // 
	$result = mysqli_query($connect,$query_user);// 
	$num_results=$result->num_rows;// 
	if($num_results==0)   //  
	{
	    echo 'login fail!!';
	    echo '<script>alert("false");window.location.href="../admin/demo.php";</script>';
	}
	else if($num_results>0)   //  
	{
		
		$_SESSION['isLogin']=1;
		header("Location: ../../admin/Theme-DeepBlueAdmin/index.php");
	}
?>

