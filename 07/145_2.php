<?php


function read($path,$lev=1){
  $dh = opendir($path);
  while (($row = readdir($dh)) !== false) {
    //过滤掉. 和 ..
    if(($row == '.') || ($row == '..')){
      continue;
    }
    //echo str_repeat("&nbsp;&nbsp;",$lev*4),$row,'<br />';
    echo '|——',str_repeat("—— ",$lev),$row,'<br />';
    if (is_dir($path.'/'.$row)) {
      read($path.'/'.$row,$lev+1);
    }
  }


  closedir($dh);
}

read('./');


 ?>
