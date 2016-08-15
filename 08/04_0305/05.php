<?php

require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';

$usr = array('name'=>'刘备','age'=>'28');
$smarty->assign($usr);
$smarty->assign($usr);

$smarty->display('05.html');








 ?>
