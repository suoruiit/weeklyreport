<?php
require_once'function.php';

if(empty($_POST['little'])){
    die('little is empty');

}
if(empty($_POST['principal'])){
    die('principal is empty');
}
if(empty($_POST['id'])){
    die('id is empty');
}

$department=$_POST['department'];
$id=intval($_POST['id']);
$little=$_POST['little'];
$principal=$_POST['principal'];
$participant=$_POST['participant'];
$time=$_POST['time'];

connectDb();

mysql_query("UPDATE reportweekly SET department='$department', little='$little', principal='$principal',participant='$participant',time='$time'WHERE id=$id ");

if(mysql_errno()){
    echo 'cuoeu';
}else{
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