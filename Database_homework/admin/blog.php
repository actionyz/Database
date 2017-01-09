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
    <title>Blog - Deep Blue Admin</title>

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
                    <li><a href="portfolio.php"><i class="fa fa-tasks"></i> 校园一角</a></li>
                    <li><a href="blog.php"><i class="fa fa-globe"></i> 校园论坛</a></li>
                    <li><a href="forms.php"><i class="fa fa-list-ol"></i> 预定教室</a></li>
                    <li><a href="backat.php"><i class="fa fa-list-ol"></i> 退报教室</a></li>
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
                            <li><a href=" ../login/logout/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


      <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Side</h2>
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                            <hr />
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                            <hr />
                            <div class="panel panel-default">
                                <div class="panel-heading">News</div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Article Title</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                            </p>
                            <div class="text-center">
                                <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                <a href="#"><i class="fa fa-comment"></i>12 Comments</a>
                                <a href="#"><i class="fa fa-share"></i>11 Shares</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Article Title</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                            </p>
                            <div class="text-center">
                                <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                <a href="#"><i class="fa fa-comment"></i>2 Comments</a>
                                <a href="#"><i class="fa fa-share"></i>211 Shares</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Article Title</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                    Aliquam in felis sit amet augue.
                            </p>
                            <div class="text-center">
                                <a href="#"><i class="fa fa-plus"></i>Full Story</a>
                                <a href="#"><i class="fa fa-comment"></i>7 Comments</a>
                                <a href="#"><i class="fa fa-share"></i>67 Shares</a>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <!-- the comment box -->
                    <div class="well">
                        <h4>Leave a Comment:</h4>
                        <form role="form">
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <hr>

                    <!-- the comments -->
                    <h3>Blog contents
                    <small>2014/03/07 11:43 PM</small>
                    </h3>
                    <p>This is a very interesting blog, well structured and organized. Would be great if you included more information on other IT topics as well.</p>

                    <h3>Contacts
                    <small>2014/03/09 12:11 PM</small>
                    </h3>
                    <p>I wanted to get in touch with the author of the blog, but I see no way to do this.</p>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
