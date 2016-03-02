<?php

  $str1 = '丁博武';
  echo strlen($str1);
  echo mb_strlen($str1,'utf-8');

  $str2 = 'abcde';
  $char = 'b';

  if(strpos($str,$char) !== false){
    echo '含有',$char,'<br>';
  }else{
    echo '不含有',$char,'<br>';
  }


 ?>
