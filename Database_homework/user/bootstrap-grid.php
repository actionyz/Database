<?php
//include('../../loginregister_A5/loginregister/login/test.php');
session_start();
if(!isset($_SESSION['isLogin']) || $_SESSION['isLogin']!==1){
 header("Location:  ../../loginregister_A5/loginregister/login.php");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Grid - Deep Blue Admin</title>

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
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="forms.php"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="signup.php"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="register.php"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="forms.php"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="forms.php"><i class="fa fa-list-ol"></i> Forms</a></li>
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
                <div class="col-lg-12 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-12
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-6
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-6
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-4
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-4
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-4
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-2
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-1
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-8
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-4
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-6
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            .col-lg-3
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

</body>
</html>
