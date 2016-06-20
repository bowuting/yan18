<?php


define('ACC',true);

require ('include/init.php');
include_once(ROOT . 'tool/UpTool.class.php');

$u = new UpTool();
$u->setExt('rar');
$u->setSize(10);
if ($res = $u->up('pic')) {
  echo "ok";
  echo $res;
} else {
  echo $u->getError();
  echo "fail";
}





 ?>
