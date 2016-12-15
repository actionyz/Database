<?php
$file = fopen('1.txt','w');
fwrite($file, $_GET['a']);
fwrite($file, $_GET['b']);
fclose($file);
?>