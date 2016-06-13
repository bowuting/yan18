<?php

define('ACC',true);
require("../include/init.php");

$goods = new GoodsModel();
$goodslist = $goods->select();



include(ROOT . 'view/admin/templates/goodslist.html');




?>
