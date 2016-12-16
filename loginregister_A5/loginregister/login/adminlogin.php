<?php
	require('conn.php');
	session_start();
//	echo $username.$passwd;
	// ·À»¤×¢Èë
	$query_user="select * from admin where username = '$username' and password = '$passwd'";   // 
	//ÊµÀý»¯Ààmysql 
	$result = mysqli_query($connect,$query_user);//ÑéÖ¤ÓÃ»§
	$num_results=$result->num_rows;//È¡µÃÊý¾Ý¿âÖÐµÄ¼ÇÂ¼ÐÐ
	if($num_results==0)   // Ê§°Ü
	{
	    echo 'login fail!!';
	    echo '<script>alert("false")</script>
	    ';
//	    header("Location: http://baidu.com");
	}
	else if($num_results>0)   // ³É¹¦
	{
		//  ÕâÀïÐèÒª¸Ä
		
		$_SESSION['isLogin']=1;
		header("Location: ../../../adminfinal/Theme-DeepBlueAdmin/index.php");
	}
?>

