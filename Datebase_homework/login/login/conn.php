<?php
 $host='localhost';// 
$user='root';// 
$password='111111';// 
$database='college2';// 
$connect = mysqli_connect($host,$user,$password) or die ('Connect Error'.mysqli_connect_error());
mysqli_select_db($connect,$database) or die ('Select Error');
$username=$_POST['Username'];
$passwd=$_POST['Password'];
?>