<?php
	require('conn.php');
	$username=$_POST['Username'];
	$passwd=$_POST['Password'];
	session_start();
	$_SESSION['s_username']=$username;
	echo $username.$passwd;
	// ����ע��
	$query_user="select * from user where username = '$username' and pass = '$passwd'";   // 
	//ʵ������mysql 
	$result = mysqli_query($connect,$query_user);//��֤�û�
	$num_results=$result->num_rows;//ȡ�����ݿ��еļ�¼��
	if($num_results==0)   // ʧ��
	{
	    echo 'login fail!!';
	    header("Location: http://baidu.com");
	}
	else if($num_results>0)   // �ɹ�
	{
		//  ������Ҫ��
		header("Location: https://zhidao.baidu.com/question/423614730178015412.html");
	}
?>
