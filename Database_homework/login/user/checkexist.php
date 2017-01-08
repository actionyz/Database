<?php
include('../login/link.php');
$username = $_POST['username'];
$result = $link->query("SELECT * FROM `user` WHERE username = '$username'");
if($result->fetch_row())
	echo "error";

?>