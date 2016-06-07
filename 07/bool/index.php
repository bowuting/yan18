<?php

include './include/init.php';

//Log::write('test');
//echo "ok";



$mysql = mysql::getIns();
//var_dump($mysql);

//测试框架是否正常
//能否正常过滤非法字符
//能否正常操作数据库

$t1 = $_GET['t1'];
$t2 = $_GET['t2'];

$sql = "insert into test(t1,t2) values ('$t1','$t2')";

var_dump($mysql->query($sql));

?>
