<?php

define('ACC',true);

require('../include/init.php');


$cat = new CateModel();
$catelist = $cat->select();
$catelist = $cat->getCatTree($catelist,0);
print_r($catelist);


include(ROOT. 'view/admin/templates/cateadd.html');




 ?>
