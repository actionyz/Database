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




<script type="text/javascript">
function check()
{
    var a,b,c,d,e,f;
    a = document.getElementById("begintime").value;
    b = document.getElementById("endtime").value;
    c = document.getElementById("reason").value;
    if(a==""||b==""||c=="")
    {
        document.getElementById("checklogin").setAttribute('disabled','disabled');
        alert("请填写完整！");
    }
    else
    {
        document.getElementById("checklogin").removeAttribute('disabled');
    }
    
}
function unlock()
{
    document.getElementById("checklogin").removeAttribute('disabled');
}

</script>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        教学楼号:<select class='panel panel-default' style="width:100px;height: 35px"  type="text"  name="buildid" placeholder="buildid">
            
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="1"> 3 </option>           
        </select>
        
       日期:<select class='panel panel-default' style="width:100px;height: 35px" type="text"  name="date" placeholder="date">
            
            <option value="Monday"> Monday </option>
            <option value="Tuesday"> Tuesday </option>
            <option value="Wednesday"> Wednesday </option>
            <option value="Thursday"> Thursday </option>
            <option value="Friday"> Friday </option>
            <option value="Saturday"> Saturday </option>
            <option value="Sunday"> Sunday </option>
        </select>   
        
        开始时间:<input onblur="unlock()" id='begintime' class='panel panel-default' style="width:100px;height: 35px" type="text" name="begintime" placeholder="begintime">
        结束时间:<input onblur="unlock()" id='endtime' class='panel panel-default' style="width:100px;height: 35px" type="text" name="endtime" placeholder="endtime">
        原因:<input onblur="unlock()" id='reason' class='panel panel-default' style="width:100px;height: 35px" type="text" name="reason" placeholder="reason">
        使用者:<input class='panel panel-default' style="width:100px;height: 35px" type="text" name="occupier" placeholder="occupier"  value="<?php   echo $_SESSION["username"]; ?>"   readonly>
        <input id='checklogin' class='btn btn-primary'  type="submit" name="submit" onclick="check()" value="查询">
        
    </form>
    <hr>
    <?php
    include("../login/login/link.php"); 
    if(!empty($_POST))
    {
        $buildid = $_POST['buildid'];
        $date = $_POST['date'];
        $begintime = $_POST['begintime'];
        $endtime = $_POST['endtime'];
        $reason = $_POST['reason'];
        $occupier = $_POST['occupier'];
        if($link)
        {
            $link->query("SET NAMES 'UTF8'");

           $result1 = $link->query("SELECT count(*) FROM `order` WHERE occupier = '$occupier'");
           if($row1 = $result1->fetch_row())
           {                
                if($row1[0] > 3)
                    {
                        echo '<div class="alert alert-dismissable alert-danger" width="50%">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>预定数超过了三个！！！</strong>请及时退订！！！
                </div>';
                goto loop;
                    }
           }
            
             /*   if($row1[0] > 3)
                    echo '<div class="alert alert-dismissable alert-danger" width="50%">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>预定数超过了三个！！！</strong>请及时退订！！！
                </div>';
                else
                {*/
                    $result = $link->query("SELECT classid,charnum from classroom where buildid = $buildid and classid  not in (select classid from course where time_to_sec(begintime) < time_to_sec('$endtime') and time_to_sec(endtime) > time_to_sec('$begintime') and `date` = '$date') and classid  not in (select classid from `order` where time_to_sec(begintime) < time_to_sec('$endtime') and time_to_sec(endtime) > time_to_sec('$begintime') and `date` = '$date')");
                    echo '<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> 查询结果</h3>
                            </div>
                            <div class="panel-body">';
                    while($row=$result->fetch_row())
                    {
                       echo "<form style='height:50px' action='./update.php' method='POST'>
                                <input style='width:15%;height:50px' class='panel panel-default' type='text' name='classid' value='".$row[0]."'>
                                <input class='panel panel-default' type='hide' style='display:none' name='date' value='".$date."'>
                                <input type='hide' style='display:none' name='begintime' value='".$begintime."'>
                                <input type='hide' style='display:none' name='endtime' value='".$endtime."'>
                                <input type='hide' style='display:none' name='occupier' value='".$occupier."'>
                                <input type='hide' style='display:none' name='reason' value='".$reason."'>
                                <input style='width:10%;height:50px'  class='btn btn-primary' type='submit' value='申请'>
                            </form>"."<p>教室座位：".$row[1]."</p>"."</br>"."<hr>";
                    }
                    echo '<div id="shieldui-grid1"></div>
                            </div>
                        </div>';
               // }
            
       
            
                
            
                
            
            
loop:        }
    }
 //   echo $_POST['classid'];

    ?>

    <div class="alert alert-dismissable alert-success" width="50%">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>按要求填写字段</strong>每人最多只能预定三个！！！
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
