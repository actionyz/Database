<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title></title>
</head>
<body>

</body>
</html>

<?php
$link=new mysqli("localhost","root","111111","college") or die("有错误".mysql_error());  
$link->query("SET NAMES 'UTF8'");   


include("function.php");

    if(isset($_POST['import']))
    {   
      
          
           
            //echo "OK";die();   
            //获取上传的文件名   
            $fileName = $_FILES['file']['name'];
            $tmpName  = $_FILES['file']['tmp_name'];
            $msg = uploadFile($fileName,$tmpName); 
            echo "<script>alert('".$msg."');window.location.href='../upload1.php';</script>"; 
    }  



?>
