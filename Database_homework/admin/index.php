<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==2){
 header("Location:  ../login/admin/login.php");
 exit();
}
//include('../login/login/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>教室后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
   
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
                            <li><a href=" ../login/logout/adminlogout.php"><i class="fa fa-power-off"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col-lg-12">
            <div class="page-header">
              <h1 id="container">教室后台管理系统</h1>
            </div>
            <div class="bs-example">
              <div class="jumbotron" style="opacity: 0.8">
                <h2>五大功能</h2>
                <p>1.数据库批量导入</p>
                <p>2.人员管理</p>
                <p>3.报修管理</p>
               
                
              </div>
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
    <script type='text/javascript' color=#4876FF zIndex='-1' opacity='20' count='99' src='./canvas-nest.min.js'></script>
</body>
</html>
