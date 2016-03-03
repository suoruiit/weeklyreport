<?php
/**
 * Created by PhpStorm.
 * User: suoruisuo
 * Date: 2015/12/29
 * Time: 15:42
 */
$dbhost = 'localhost';
$dbuser = 'root'; //我的用户名
$dbpass = ''; //我的密码
$dbname = 'app_suoruisuo'; //我的mysql库名
$connect = mysql_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($connect) {
    mysql_select_db($dbname , $connect);

} else {
    echo "数据库连接成功";
}
?>