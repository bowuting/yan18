<?php

define('ACC',true);
require("../include/init.php");

$goods_id = $_GET['goods_id'] + 0;
$goods = new GoodsModel();
if($goods->trash($goods_id)){
  echo "已加入回收站";
} else {
  echo "加入回收站失败";
}






 ?>
