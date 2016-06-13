<?php
define('ACC',true);
require("../include/init.php");

$goods_id = $_GET['goods_id'] + 0;

$goods = new GoodsModel();
$goods_info = $goods->find($goods_id);

if (!empty($goods_info)) {
  print_r($goods_info);
} else {
  echo "商品不存在";
}



 ?>
