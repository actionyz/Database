<?php
header('Content-Type:text/html;charset=utf-8');
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

    <!-- you need to include the shieldui css and js assets in `order` for the charts to work -->
    <!-- <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" /> -->
    <!-- <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script> -->
    <!-- <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script> -->
</head>
<body >
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
                    <li><a href="bootstrap-elements.php"><i class="fa fa-font"></i> 模板</a></li>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>当前上课教室查询<small></small></h1>
                </div>
            </div>
                <form action="" method="get" id="slt"> 
                     <label>教学楼</label> 
                     <select style='width:15%;height:40px' class='panel panel-default' name="build" id="slt1"> 
                         <option value="1">1</option> 
                         <option value="2">2</option> 
                         <option value="3">3</option> 
                         <option value="4">4</option> 
                    </select> 
                    &nbsp&nbsp&nbsp&nbsp
                    <label>楼层</label> 
                    <select style='width:15%;height:40px' class='panel panel-default' name="floor" id="slt2"> 
                         <option value="1">1</option> 
                         <option value="2">2</option> 
                         <option value="3">3</option> 
                         <option value="4">4</option> 
                    </select>
                    &nbsp&nbsp&nbsp&nbsp
                    <input class='btn btn-primary' type="submit">
               </form> 
            <hr>
            <?php
                // 连接数据库
                // 取出数据
            include("../login/login/link.php");
            date_default_timezone_set('PRC');
            if(!empty($_GET))
            {
                echo "</br></br>";
                $buildid = $_GET["build"]; 
                $floorid = $_GET["floor"]; 
                $today = getdate();//获取今天时间的关联数组
                // echo $today["weekday"]
                
                if(!$mysqli)
                {
                    die($mysqli->error);
                }
                $hours = $today["hours"];
                $minutes = $today["minutes"];
                // 查course表
                $sql =  "select * from course,classroom where course.classid=classroom.classid and classroom.floor=".$floorid." and classroom.buildid=".$buildid." and course.date='".$today["weekday"]."' and time_to_sec(course.begintime) < time_to_sec('".$hours.":".$minutes."') and time_to_sec(course.endtime) > time_to_sec('".$hours.":".$minutes."')";
                    
                $res = $mysqli->query($sql);
                for($i=0;$i<$res->num_rows;$i++)
                {
                    $row=$res->fetch_row();
                    if($i%4==0&&$i!=0) echo "</br></br></br></br></br></br></br></br>";
                    echo "<div class=\"col-lg-3\">";
                    echo "<div class=\"panel-body alert-info\">";
                    echo "<div class=\"col-xs-5 text-right\">";
                    echo "<p class=\"alerts-heading\">".$row[6]."</p>";
                    echo "<p class=\"alerts-text\" style=\"height: 30px; width:100px\">".$row[1]."</p>";
                    echo "</div></div></div>";
                }
                // 查`order`表
                $sql = "select * from `order`,classroom where `order`.classid=classroom.classid and classroom.floor=".$floorid." and classroom.buildid=".$buildid." and `order`.`date`='".$today["weekday"]."' and time_to_sec(`order`.begintime) < time_to_sec('".$hours.":".$minutes."') and time_to_sec(`order`.endtime) > time_to_sec('".$hours.":".$minutes."')";
                $res = $mysqli->query($sql);
                for($i=0;$i<$res->num_rows;$i++)
                {
                    $row=$res->fetch_row();
                    if($i%4==0&&$i!=0) echo "</br></br></br></br></br></br></br></br>";
                    echo "<div class=\"col-lg-3\">";
                    echo "<div class=\"panel-body alert-info\">";
                    echo "<div class=\"col-xs-5 text-right\">";
                    echo "<p class=\"alerts-heading\">".$row[0]."</p>";
                    echo "<p class=\"alerts-text\" style=\"height: 30px; width:100px\">".$row[2]."</p>";
                    echo "</div></div></div>";
                }

            }
                
            ?>
        </div>
    </div>
    <!-- /#wrapper -->

</body>
</html>
