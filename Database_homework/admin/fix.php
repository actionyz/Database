
<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==1){
 header("Location:  ../login/user/demo.php");
 exit();
}
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
                    <li><a href="upload1.php"><i class="fa fa-tasks"></i> 数据库导入</a></li>
                    <li><a href="manage.php"><i class="fa fa-list-ol"></i> 人员管理</a></li>
                    <li><a href="fix.php"><i class="fa fa-list-ol"></i> 教室报修情况</a></li>
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

        <div class="col-lg-12">
            <div class="page-header">
              <h1 id="container" align="center">报修管理</h1>
            </div>
            <div class="bs-example">
              <div class="jumbotron" style="opacity: 0.7">
                <h2>报修教室</h2>

                <?php
                    include("../login/login/link.php");
                    // $link=new mysqli("localhost","root","123456","college") or die("有错误".mysql_error());
                    //$mysqli = new MySQLi("localhost","root","123456","college");

                    $sql = "select classid from classroom where repair=1";
                    $res = $mysqli->query($sql);
                    for ($i=0;$i<$res->num_rows;$i++)
                    {
                        $row = $res->fetch_row();
                        echo "</br><form action='' method='get'><input type='text' placeholder='classid' style='width:15%;height:40px' class='panel panel-default' value=\"$row[0]\"name='classid' readonly><input type='submit' value='已维修' class='btn btn-primary'></form>";
                    }
                    if(!empty($_GET))
                    {
                        $classid = $_GET['classid'];
                        $sql ="UPDATE `classroom` SET `repair`=0 WHERE classid='".$classid."'";
                        $res = $mysqli->query($sql);
                        echo "<script> alert('删除成功');setTimeout(\" window.location.href='fix.php'\",0) </script>"; 
                    }
                ?>



              </div>
            </div>
            <div class="alert alert-dismissable alert-success" width="50%">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>报修处理,手动删除</strong> 
            </div>
          </div>
    <!-- /#wrapper -->
</body>
</html>
<script type='text/javascript' color=#C2C2C2 zIndex='-1' opacity='20' count='99' src='./canvas-nest.min.js'></script>
