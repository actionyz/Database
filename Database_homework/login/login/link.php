<?php
$link=new mysqli("localhost","root","111111","college") or die("有错误".mysql_error());
$mysqli = new MySQLi("localhost","root","111111","college");
mysqli_set_charset ($link,'utf8');
mysqli_set_charset ($mysqli,'utf8');
?>