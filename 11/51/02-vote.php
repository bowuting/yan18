<?php
// sleep(4);
if (rand(1,10) < 4) {
  echo "0";
} else {

   $cnt = file_get_contents('./res.txt');
   $cnt += 1;

   file_put_contents('./res.txt',$cnt);
   echo "1";
}

 ?>
