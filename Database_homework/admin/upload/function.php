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
    //导入Excel文件   
    function uploadFile($file,$filetempname)    
    {   
      $flag = $_POST['import'];
    	$link=new mysqli("localhost","root","111111","college") or die("有错误".mysql_error());
        //自己设置的上传文件存放路径   
        $filePath = 'upFile/';   
        $str = "";   
        //下面的路径按照你 PHPExcel的路径来修改   
        set_include_path('.'. PATH_SEPARATOR .'E:\php\AppServ\www\91ctcStudy\PHPExcelImportSQl2 \PHPExcel' . PATH_SEPARATOR .get_include_path());    
             
        require_once './Classes/PHPExcel.php';   
        require_once './Classes/PHPExcel/IOFactory.php';   
        //require_once 'PHPExcel\Reader\Excel5.php';//excel 2003   
        require_once './Classes/PHPExcel/Reader/Excel2007.php';//excel 2007   
      
        $filename=explode(".",$file);//把上传的文件名以“.”好为准做一个数组。    
        $time=date("y-m-d-H-i- s");//去当前上传的时间    
        $filename [0]=$time;//取文件名t替换    
        $name=implode (".",$filename); //上传后的文件名    
        $uploadfile=$filePath.$name;//上传后的文件名地址    
      
         
        //move_uploaded_file() 函数 将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。   
        $result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下   
//        echo $result;
        if($result) //如果上传文件成功，就执行导入 excel操作   
        {   
           // $objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2003   
           $objReader = PHPExcel_IOFactory::createReader('Excel2007');//use excel2003 和  2007 format   
           // $objPHPExcel = $objReader->load($uploadfile); //这个容易造成httpd崩溃   
           $objPHPExcel = PHPExcel_IOFactory::load($uploadfile);//改成这个写法就好了   
      
           $sheet = $objPHPExcel->getSheet(0);    
           $highestRow = $sheet->getHighestRow(); // 取得总行数    
           $highestColumn = $sheet->getHighestColumn(); // 取得总列数   
           
            //循环读取excel文件,读取一条,插入一条   
            for($j=2;$j<=$highestRow;$j++)   
            {    
                for($k='A';$k<=$highestColumn;$k++)   
                {    
                     $str .= iconv('utf-8','gbk',$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';//读 取单元格  
                }   
                //explode:函 数把字符串分割为数组。  
                $strs =explode("\\",$str);
                  
                //var_dump ($strs);  
                //die();  
//                echo $strs[0].$strs[1].$strs[2].$strs[3].$strs[4];
//                echo "<br>";
                if($flag === "user")
                  $sql="INSERT INTO `user`(`userid`, `username`, `pass`, `identity`, `section`) VALUES ('$strs[0]','$strs[1]','$strs[2]','$strs[3]','$strs[4]')"; 
                if($flag === "order")
                  $sql = "INSERT INTO `order`(`classid`, `date`, `reason`, `occupier`, `begintime`, `endtime`) VALUES ('$strs[0]','$strs[1]','$strs[2]','$strs[3]','$strs[4]','$strs[5]')";
                if($flag === "major")
                  $sql="INSERT INTO `major`(`majorid`, `majorname`, `number`, `academy`, `battalion`) VALUES ('$strs[0]','$strs[1]','$strs[2]','$strs[3]','$strs[4]')"; 
                if($flag === "course")
                  $sql = "INSERT INTO `course`(`majorid`, `courseid`, `date`, `classid`, `begintime`, `endtime`) VALUES  ('$strs[0]','$strs[1]','$strs[2]','$strs[3]','$strs[4]')";
                if($flag === "classroom")
                $sql = "INSERT INTO `classroom`(`classid`, `charnum`, `repair`, `buildid`, `floor`, `use`, `reason`) VALUES ('$strs[0]','$strs[1]','$strs[2]','$strs[3]','$strs[4]','$strs[5]','$strs[6]')";      
                $link->query("SET NAMES 'UTF8'");  
                $link->query($sql);
                $str ="";  
           }   
           unlink ($uploadfile); //删除上传的excel文件  
           $msg = "导入成功！";  
        }else{  
           $msg = "导入失败！";   
        }   
        return $msg;   
    }  


?>