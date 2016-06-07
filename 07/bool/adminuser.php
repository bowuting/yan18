<?php

require('./include/init.php');

$mysql = mysql::getIns();

$test = new TestModel();
$test->reg(array('t1'=>'adminuser','t2'=>'adminuser'));







 ?>
