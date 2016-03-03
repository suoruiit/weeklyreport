<?php
require_once 'function.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>麦梯周计划 一览页面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .td{
            border:1px solid #EEE;
            margin-top: 15px;
            padding:10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center"> 麦梯定制</h2>
    <h3 class="text-center">周计划</h3>
    <h4 class="text-left">2016年度</h4>
    <h5 class="text-left"> <?php
        date_default_timezone_set('Asia/Shanghai');
        echo date('y-m-d ',time());
        ?></h5>
    <button class="like"><a href='allusers.php'>总览</a></button>
    <button class="like"><a href='baogao.html'>写周报</a></button>

    <div class="row">
        <table  style="text-align:left;" border='1'>
            <!--<thead >-->
            <tr	style="border:1px solid #EEF;" >
                <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center td">部门</th>
                <th class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center td">日常工作与问题</th>
                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center td">负责人</th>
                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center td">参与人</th>
                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center td">时间</th>
                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center td">修改</th>
                <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center td">删除</th>
            </tr>
            <?php

            mysql_select_db('app_suoruisuo ');
            $result=mysql_query("SELECT*FROM reportweekly  WHERE department='设计部' ");
            $dataCount=mysql_num_rows($result);

            for($i=0;$i<$dataCount;$i++){
                $result_arr=mysql_fetch_assoc($result);
                $id=$result_arr['id'];
                $department=$result_arr['department'];
                $patch=$result_arr['little'];
                $principal=$result_arr['principal'];
                $participant=$result_arr['participant'];
                $time=$result_arr['time'];
                //echo"<tr><td>$id</td><td>$department</td><td>$patch</td><td>$principal</td><td>$participant</td><td>$time</td></tr>";
                ?>
                <tr>
                    <td><?php echo $department ?></td>
                    <td><?php echo $patch ?></td>
                    <td><?php echo $principal ?></td>
                    <td><?php echo $participant ?></td>
                    <td><?php echo $time ?></td>
                    <td><a href='edituser.php?id=<?php echo $id ?>'>修改</a></td>
                    <td><a href='2deleteuser.php?id=<?php echo $id ?>'>删除</a></td>
                </tr>
                <?php
            }


            ?>
            </thead>
        </table>
    </div>
</div>
</body>
</html>