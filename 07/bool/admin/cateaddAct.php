<?php

define('ACC','true');
require ('../include/init.php');

/*
file : cateaddAct.php
作用：接收cateadd.php的表单页面发送来的数据
并调用model，把数据入库
*/

//第一步：显示数据
//print_r($_POST);

//第二步：检验数据
$data = array();
if(empty($_POST['cat_name'])){
  exit("栏目名不能为空");
}
$data['cat_name'] = $_POST['cat_name'];

//同理，判断intro和parent是否为空。
$data['intro'] = $_POST['intro'];
$data['parent_id'] = $_POST['parent_id'];

print_r($data);

//第二步：
//实例化model
//并调用model的相关方法
$cat = new CateModel();

var_dump($cat->add($data));





 ?>
