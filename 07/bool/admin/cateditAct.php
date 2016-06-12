<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/



define('ACC',true);
require('../include/init.php');


// 接POST
// 判断合法性,同学们自己做.


$data = array();
if(empty($_POST['cat_name'])) {
    exit('栏目名不能为空');
}
$data['cat_name'] = $_POST['cat_name'];
$data['parent_id'] = $_POST['parent_id'];
$data['intro'] = $_POST['intro'];

$cat_id = $_POST['cat_id'] + 0;



// 调用model 来更改
$cat = new CatModel();


//查找
//echo "你想修改".$cat_id."栏目".'<br />';
//echo "想修改父栏目为".$data['parent_id'].'<br />';
$trees =  $cat->getTree($data['parent_id']);


//想要改的父栏目是否在当前的家谱树中
$flag = true;
foreach ($trees as $v) {
  if ($v['cat_id'] == $cat_id) {
    $flag = false;
    break;
  }
}


if(!$flag){
  //echo $cat_id.'是'.$data['parent_id'].'的祖先。'.'<br />';
  echo "父栏目选取错误<br />";
  exit;
}


if($cat->update($data,$cat_id)) {
    echo '修改成功';
} else {
    echo '修改失败';
}
