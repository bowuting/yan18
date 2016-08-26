<?php

require('../Smarty3/libs/Smarty.class.php');
require('./mysmarty.php');

$smarty = new MySmarty();


$smarty->assign('price',9999);
$smarty->assign(array('name'=>'zhangsan','height'=>180,'hose'=>180));

$smarty->display('04.html');








 ?>
