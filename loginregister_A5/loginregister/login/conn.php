<?php
//数据库链接文件
$host='localhost';//数据库服务器
$user='root';//数据库用户名
$password='111111';//数据库密码
$database='college2';//数据库名
$connect = mysqli_connect($host,$user,$password) or die ('Connect Error'.mysqli_connect_error());
mysqli_select_db($connect,$database) or die ('Select Error');
$username=$_POST['Username'];
$passwd=$_POST['Password'];
?>