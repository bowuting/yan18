<?php

//取数据
$tittle = "两会召开";
$content = "nice";


require_once 'mini.php';

$temp = new Mini();
//$comp = $temp->display('03temp.html');

$temp->assign('tittle',$tittle);
$temp->assign('content',$content);
//print_r($temp->_tpl_var);
$temp->display('03temp.html');
 ?>
