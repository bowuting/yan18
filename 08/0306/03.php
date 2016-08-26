
<?php

/*
    模板中的标签是否只能原样输出呢？
    答：不是，标签是能参与运算的/

*/


require('../Smarty3/libs/Smarty.class.php');
require('./mysmarty.php');

$smarty = new MySmarty();

$smarty->assign('age',100);

$smarty->display('03.html');




 ?>
