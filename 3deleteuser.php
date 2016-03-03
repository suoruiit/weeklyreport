<?php
if(empty($_GET['id'])){
    die('id is empty');
}
require_once'function.php';
connectDb();
$id=intval($_GET['id']);
mysql_query("DELETE FROM reportweekly WHERE id=$id");
if(mysql_errno()){
    echo "错误";
}else{
    header("Location:3user.php");
}
?>