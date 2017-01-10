<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==1){
 header("Location:  ../login/repairr/demo.php");
 exit();
}
//include('../login/login/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大学教室管理系统</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<script type="text/javascript">

function check()
{
    
    if(document.getElementById("form").value=='')
    {
        document.getElementById("button").setAttribute('disabled','disabled');
        
    }
}

function dis()
{
    document.getElementById("button").removeAttribute('disabled');
}


</script>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">教室管理系统</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-bullseye"></i> 主页</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> 校园一角</a></li>
                    <li><a href="forms.php"><i class="fa fa-list-ol"></i> 预定教室</a></li>
                    <li><a href="backat.php"><i class="fa fa-list-ol"></i> 退报教室</a></li>
                    <li><a href="classview.php"><i class="fa fa-font"></i> 教室课程查询</a></li>
                    <li><a href="repair.php"><i class="fa fa-font"></i> 教室报修</a></li>
                  
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                   
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 用户管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> 预留</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
                            <li class="divider"></li>
                            <li><a href=" ../login/logout/logout.php"><i class="fa fa-power-off"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

	<?php
    echo "<h2>可报修的教室列表</<h2></h2>></br><hr>";

		include("../login/login/link.php");
        if(!$mysqli)
        {
            die($mysqli->error);
        }
        $sql = "select classid from classroom where `repair`=0";
        $res = $mysqli->query($sql);
        for ($i=0;$i<$res->num_rows;$i++)
        {
        	$row=$res->fetch_row();
        	echo  "<h3>教室：".$row[0]."</h3></br>";
        	echo "<form action='' method='get'><input   type='text' name='classid' value='".$row[0]."' style='width:15%;height:40px'  class='panel panel-default' readonly>&nbsp&nbsp&nbsp<input id='form' type='text' name='reason' onblur='dis()' placeholder='原因' style='width:15%;height:40px' class='panel panel-default'></input><input id='button' class='btn btn-primary' onclick='check()' type='submit' value='报修' >"."</br></br></form> 
            <div class='bs-example' style = 'opacity: 0.7 '>
              <div class='progress progress-striped active'>
                <div class='progress-bar'  style='width: 100%'></div>
              </div>
            </div>";
        }
        if(!empty($_GET))
        {
	        $class = $_GET['classid'];		
	        $reason = $_GET['reason'];
	        $sql = "UPDATE `classroom` SET `repair`=1,`reason`='".$reason."' WHERE classid=".$class;
	        $res = $mysqli->query($sql);
	        $sql = "select classid from classroom where `repair`=0";
	        echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
   		}
	?>



    

    
    </div>
    <!-- /#wrapper -->

</body>

</html>
