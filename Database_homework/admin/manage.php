// 人员管理
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
              <h1 id="container" align="center">人员管理</h1>
            </div>
            <div class="bs-example">
              <div class="jumbotron" style="opacity: 0.8">
                <h2>搜索用户</h2>
                <form acton="" method="get"> 
                    <input type="text" placeholder="userid" style="width:15%;height:40px" class="panel panel-default" name="userid">
                    <input type="submit" value="查询" class="btn btn-primary">
                </form>
                <h3>查询结果</h3>
                <?php
                    include("../login/login/link.php");
                    // $link=new mysqli("localhost","root","123456","college") or die("有错误".mysql_error());
                    //$mysqli = new MySQLi("localhost","root","123456","college");
                    echo "</br>";
                    if(!empty($_GET))
                    {
                        $userid = $_GET["userid"];
                        $sql = "select * from user where userid='".$userid."'";
                        $res = $mysqli->query($sql);
                        $row = $res->fetch_row();
                        for ($i=0;$i<count($row);$i++)
                        {
                            if($i==2)continue;
                            else
                            {
                                echo "<label>".$row[$i]."</label>";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            }
                        }
                    }

                    echo "<h3>全部用户</h3>";
                    $sql = "select * from user";
                    $res = $mysqli->query($sql);
                    $res->fetch_row();
                    echo "<div class='sui-gridcontent' class='sui-grid sui-grid-core'>";
                    echo "<div lass='sui-gridheader'>";
                    echo "<table class='sui-table sui-non-selectable' border=1 >";
                    echo "<colgroup>";
                    echo "<col style='width:90px'><col style='width:90px'><col style='width:90px'><col style='width:90px'>";
                    echo "</colgroup>";
                    echo "<tr class='sui-row'>";
                    echo "<tbody>";
                    while($field=$res->fetch_field())   
                    {
                        echo "<th class='sui-headercell'><a class='sui-link'>{$field->name}</a></th>";
                    }
                    echo "</tr>";
                    //循环取出数据
                    while($row=$res->fetch_row())
                    {
                        echo "<tr class='sui-row'>";
                        foreach($row as $value)
                        {
                            echo "<td class='sui-cell'>$value</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>"; 
                    echo "</div>";
                    echo "</div>";
                    // 删除用户

                ?>

              </div>
            </div>
            <div class="bs-example">
              <div class="jumbotron">
                <h2>删除用户</h2>
                <form acton="" method="post"> 
                    <input type="text" placeholder="userid" style="width:15%;height:40px" class="panel panel-default" name="user_id">
                    <input type="submit" value="删除" class="btn btn-primary">
                </form>
                <?php
                    include("../login/login/link.php");
                    // $link=new mysqli("localhost","root","123456","college") or die("有错误".mysql_error());
                    //$mysqli = new MySQLi("localhost","root","123456","college");
                    if(!empty($_POST))
                    {
                        $user_id = $_POST["user_id"];
                        $sql = " DELETE from user where userid='".$user_id."'";
                        $res = $mysqli->query($sql);
                        if(mysqli_affected_rows($mysqli)>0)
                        {
                            echo "删除成功";
                        }
                    }
                ?>
              </div>
            </div>
            <div class="alert alert-dismissable alert-success" width="50%">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>人员信息删除</strong> 
            </div>
          </div>
    <!-- /#wrapper -->
    <script type='text/javascript' color=#C2C2C2 zIndex='-1' opacity='20' count='99' src='./canvas-nest.min.js'></script>
</body>

</html>
