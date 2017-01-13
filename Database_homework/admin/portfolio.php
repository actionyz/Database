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

    <style>
        img {
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
            -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            margin-bottom: 20px;
        }
        img:hover {
            filter: none; /* IE6-9 */
            -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
        }
    </style>
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


        <hr />

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>校园一角</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/1.jpg" />
                            <span>
                                鸟瞰信大全景图
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/2.jpg" />
                            <span>
                                湖中小路，聆听水的声音
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/3.jpg" />
                            <span>
                                画中信大是多么的美丽
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/4.jpg" />
                            <span>
                                艰苦奋斗，为学校争光添彩
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/5.jpg" />
                            <span>
                               湖边小厅，蕴含浓浓的诗意
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/6.jpg" />
                            <span>
                               最美信大马桶楼
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/7.jpg" />
                            <span>
                                湖边一角
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/1.jpg" />
                            <span>
                               鸟瞰信大全景图
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="../image/2.jpg" />
                            <span>
                               湖中小路，聆听水的声音
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
