<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==1){
 header("Location:  ../../loginregister_A5/loginregister/demo.php");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Deep Blue Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
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
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> 校园一角</a></li>
                    <li><a href="blog.php"><i class="fa fa-globe"></i> 校园论坛</a></li>
                    <li><a href="forms.php"><i class="fa fa-list-ol"></i> 教室预定</a></li>
                    <li><a href="forms.php"><i class="fa fa-font"></i> 教室课程查询</a></li>
                    <li><a href="forms.php"><i class="fa fa-font"></i> 教室报修</a></li>
                    <li><a href="forms.php"><i class="fa fa-list-ol"></i> 教室排名</a></li>
                    <li><a href="forms.php"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.php"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.php"><i class="fa fa-table"></i> Bootstrap Grid</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="./php/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
           
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-truck fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">343</p>
                                <p class="alerts-text">New Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-money fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">17453</p>
                                <p class="alerts-text">Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-twitter fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">743</p>
                                <p class="alerts-text">Mentions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-download fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">1453</p>
                                <p class="alerts-text">Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-truck fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">343</p>
                                <p class="alerts-text">New</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-money fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">17453</p>
                                <p class="alerts-text">Income</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-twitter fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">743</p>
                                <p class="alerts-text">Mentions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default ">
                        <div class="panel-body alert-info">
                            <div class="col-xs-5">
                                <i class="fa fa-download fa-5x"></i>
                            </div>
                            <div class="col-xs-5 text-right">
                                <p class="alerts-heading">1453</p>
                                <p class="alerts-text">Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</body>
</html>
