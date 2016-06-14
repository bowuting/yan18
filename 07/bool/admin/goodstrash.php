<?php

define('ACC',true);
require("../include/init.php");

$goods = new GoodsModel();

if (isset($_GET['act']) && $_GET['act']== 'show') {
  $goodslist = $goods->getGoodsTrashed();
  include(ROOT . 'view/admin/templates/goodslist.html');

} else {
  $goods_id = $_GET['goods_id'] + 0;
  if($goods->trash($goods_id)){
    echo "已加入回收站";
  } else {
    echo "加入回收站失败";
  }
}








 ?>
