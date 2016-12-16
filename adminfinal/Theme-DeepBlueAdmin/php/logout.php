<?php
	//Logout.php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]))
{
	setcookie(session_name(),'',time-4200,'/');
}
session_destroy();
header("Location:  ../../../loginregister_A5/loginregister/demo.php");
?>