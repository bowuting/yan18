<?php

define('ACC',true);
require("../include/init.php");




$data = array();
$data['goods_name'] = trim($_POST['goods_name']);

//数据的检验，做一个示例
if ($data['goods_name'] == '') {
  echo "商品名不能为空";
  exit;
}

/*
foreach ($_POST as $k => $v) {

  $data[$k] = $v;
}
*/

$data['goods_sn']     = trim($_POST['goods_sn']);
$data['cat_id']       = $_POST['cat_id'] + 0;
$data['shop_price']   = $_POST['shop_price'];
$data['market_price'] = $_POST['market_price'];
$data['goods_desc']   = $_POST['goods_desc'];
$data['goods_weight'] = $_POST['goods_weight'] * $_POST['weight_unit'];
$data['is_best']      = isset($_POST['is_best'])?1:0;
$data['is_new']       = isset($_POST['is_new'])?1:0;
$data['is_hot']       = isset($_POST['is_hot'])?1:0;
$data['is_on_sale']   = isset($_POST['is_on_sale'])?1:0;
$data['keywords']     = $_POST['keywords'];
$data['goods_brief']  = $_POST['goods_brief'];

$data['add_time'] = time();

//print_r($data);

$goods = new GoodsModel();
if($goods_id = $goods->add($data)){
  echo "商品发布成功";
} else {
  echo "商品发布失败";
}
 ?>
