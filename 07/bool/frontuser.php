<?php

require('./include/init.php');


$test = new TestModel();
var_dump($test->reg(array('t1'=>'frontuser','t2'=>'frontuser')));

 ?>
