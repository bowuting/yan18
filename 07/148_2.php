<?php

//递归转义
$arr = array('a"b',array("c'd",array('e"f')));

function _addslashes($arr){
  foreach ($arr as $k => $v) {
    if(is_string($v)){
      $arr[$k] = addslashes($v);
    }
  }
  return $arr;
}


printf_r(_addslashes($arr));

//$a = 'adad"d';

//echo addslashes($a);








 ?>
