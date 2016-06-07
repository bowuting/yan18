<?php

//查询所有用户
require('./include/init.php');

$test = new TestModel();

$list = $test->select();

//print_r($list);

include (ROOT.'view/userlist.html');









?>
