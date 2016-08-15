<?php

require('../Smarty3/libs/Smarty.class.php');

//实例化
$smarty = new Smarty();


//配置
$smarty->template_dir = './temp';
$smarty->compile_dir  = './comp';

$smarty->config_dir = './conf';

//3种变量来源之 系统保留 不用赋值，自动获取

define('HEI',8846);


$smarty->display('04.html');


//3种变量之 配置文件中的配置变量
/*
  1、配置文件一般以.conf做后缀
  2、配置文件的写法是：
    选项1 = 值1
    选项2 = 值2
  3、配置smarty的config_dir 并把配置文件放在该目录下
*/






 ?>
