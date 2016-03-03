<?php
header("content-Type: text/html; charset=utf-8");

include("config.php");
$department=$_POST['department'];
$patch=$_POST['little'];
$principal=$_POST['principal'];
$participant=$_POST['participant'];

$time=$_POST['time'];
$little = str_replace("","",$patch);

if(empty($_POST['little'])){


    echo "<script>location.href='baogao.html';</script>";


} else{
    $global_db_list="insert into reportweekly (department,little,principal,participant,time) values ('$department','$patch','$principal','$participant','$time')";
    mysql_query($global_db_list);
    switch($department){
        case "市场部":
            echo "<script>location.href='1user.php';</script>";
            break;

        case "设计部":
            echo "<script>location.href='2user.php';</script>";
            break;
        case "产品组":
            echo "<script>location.href='5user.php';</script>";
            break;
        case"销售部":
            echo "<script>location.href='3user.php';</script>";
            break;
        default:
            echo "<script>location.href='4user.php';</script>";

    }

}

?>

