<?php



define('ACC',true);
include('./include/init.php');



//取出５条新品

$goods = new GoodsModel();
$newList  = $goods->getNew(5);

//$catgoods = $goods->catGoods(1);
$category = new CatModel();
$cats = $category->select();//取出所有的栏目来
print_r($cats);
include (ROOT . '/view/front/index.html');








 ?>
