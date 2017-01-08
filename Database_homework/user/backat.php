<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==1){
 header("Location:  ../login/user/demo.php");
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

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <!-- <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script> -->
    <!-- <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script> -->
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

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input style='width:15%;height:38px' class='panel panel-default' type="text" name="occupier" placeholder="occupier" value="<?php   echo $_SESSION["username"]; ?>"   readonly>
        <input class='btn btn-primary' type="submit" name="submit" value="查询">
    </form>
    
    <?php
    include("../login/login/link.php"); 
    if(!empty($_POST))
    {
        $occupier = $_POST['occupier'];

        if($link)
        {
            $link->query("SET NAMES 'UTF8'");
            $result = $link->query("SELECT classid,`date`,begintime,endtime  FROM `order` WHERE occupier = '$occupier'");
            

            echo '<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> 查询结果</h3>
                        </div>
                        <div class="panel-body">';
            while($row=$result->fetch_row())
                {
                    echo "<form style='height:50px' action='./delete.php' method='POST'>
                            <input style='width:15%;height:50px' class='panel panel-default' type='text' name='classid' value='".$row[0]."'  readonly>
                            <input 	type='hide' style='display:none' name='date' value='".$row[1]."'  readonly>
                            <input style='width:15%;height:50px' class='panel panel-default' type='text'   name='begintime' value='".$row[2]."'  readonly>
                            <input style='width:15%;height:50px' class='panel panel-default' type='text'   name='endtime' value='".$row[3]."'  readonly>
                            <input style='width:15%;height:50px'  class='btn btn-primary' type='submit' value='退报'>
                        </form>"."</br>"."<hr>";
                }
                
            echo '<div id="shieldui-grid1"></div>
                        </div>
                    </div>';
        }
    }
    ?>
 	  <div class="alert alert-dismissable alert-success" width="50%">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>输入姓名点击</strong> 查询预定教室的结果
            </div>				
                           
                            
  
    
    
    
    </div>
    <!-- /#wrapper -->

    <script type="text/javascript">
        jQuery(function ($) {
            var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
                visits = [123, 323, 143, 132, 274, 223, 143, 156, 223, 223],
                budget = [23, 19, 11, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                sales = [11, 9, 31, 34, 42, 52, 35, 22, 37, 45, 55, 57],
                targets = [17, 19, 5, 4, 62, 62, 75, 12, 47, 55, 65, 67],
                avrg = [117, 119, 95, 114, 162, 162, 175, 112, 147, 155, 265, 167];

            $("#shieldui-chart1").shieldChart({
                primaryHeader: {
                    text: "Visitors"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [{
                    seriesType: "area",
                    collectionAlias: "Q Data",
                    data: performance
                }]
            });

            $("#shieldui-chart2").shieldChart({
                primaryHeader: {
                    text: "Login Data"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                dataSeries: [
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Logins",
                        data: visits
                    },
                    {
                        seriesType: "polarbar",
                        collectionAlias: "Avg Visit Duration",
                        data: avrg
                    }
                ]
            });

            $("#shieldui-chart3").shieldChart({
                primaryHeader: {
                    text: "Sales Data"
                },
                dataSeries: [
                    {
                        seriesType: "bar",
                        collectionAlias: "Budget",
                        data: budget
                    },
                    {
                        seriesType: "bar",
                        collectionAlias: "Sales",
                        data: sales
                    },
                    {
                        seriesType: "spline",
                        collectionAlias: "Targets",
                        data: targets
                    }
                ]
            });

            $("#shieldui-grid1").shieldGrid({
                dataSource: {
                    data: gridData
                },
                sorting: {
                    multiple: true
                },
                paging: {
                    pageSize: 7,
                    pageLinksCount: 4
                },
                selection: {
                    type: "row",
                    multiple: true,
                    toggle: false
                },
                columns: [
                    { field: "id", width: "70px", title: "ID" },
                    { field: "name", title: "Person Name" },
                    { field: "company", title: "Company Name" },
                    { field: "email", title: "Email Address", width: "270px" }
                ]
            });
        });
    </script>
</body>
</html>
