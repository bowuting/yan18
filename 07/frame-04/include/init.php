
<?php
/*
初始化文件
作用：框架初始化
*/
defined('ADC') || exit('ADC Denied');
define ('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))) . '/');
//ROOT文件夹
//echo ROOT;

// require (ROOT.'include/db.class.php');   //引入数据库类
// require (ROOT.'include/conf.class.php'); //引入配置文件类
// require (ROOT.'include/log.class.php');
 require (ROOT.'include/lib_base.php');
// require (ROOT.'include/mysql.class.php');
//
// require (ROOT.'model/Model.class.php');
// require (ROOT.'model/TestModel.class.php');


function __autoload($class){
  if (strtolower(substr($class,-5)) == 'model') {
    require (ROOT.'model/' .$class. '.class.php');
  } else {
    require (ROOT.'include/'.$class.'.class.php');
  }
}


define ('DEBUG',true);                   //定义调试模式
if (defined('DEBUG')) {
  error_reporting(E_ALL);
} else {
  error_reporting(0);
}

$_GET  = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);

                                          //递归过滤参数  $_GET  $_POST
                                          //日志记录功能

 ?>
