<?php
	require('conn.php');
	$username=$_POST['Username'];
	$passwd=$_POST['Password'];
	session_start();
	$_SESSION['s_username']=$username;
	echo $username.$passwd;
	// 防护注入
	$query_user="select * from user where username = '$username' and pass = '$passwd'";   // 
	//实例化类mysql 
	$result = mysqli_query($connect,$query_user);//验证用户
	$num_results=$result->num_rows;//取得数据库中的记录行
	if($num_results==0)   // 失败
	{
	    echo 'login fail!!';
	    header("Location: http://baidu.com");
	}
	else if($num_results>0)   // 成功
	{
		//  这里需要改
		header("Location: https://zhidao.baidu.com/question/423614730178015412.html");
	}
?>
