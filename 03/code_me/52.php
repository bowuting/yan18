<?php
//递归打印当前目录下所有的文件，目录和子目录

  function printdir($path)
  {
    $dh = opendir($path);

    while ( ($row=readdir($dh)) !== false) {
      echo $row,'<br>';

      

      if (is_dir('$path' . '/' . '$row')) {
        printdir('$path' . '/' . '$row');
      }

  }

  closedir($dh);
}

  $path = '.';
  printdir($path);



 ?>
