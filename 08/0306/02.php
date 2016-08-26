<?php

/**
 *
 */
 require('../Smarty3/libs/Smarty.class.php');
 require('./mysmarty.php');

 //类的自动加载

 $smarty = new MySmarty();



 class human {
   public $name = "zhangsan";
   public $age  = "28";
   public function sayhi(){
     return "hello world";
   }
 }

 $man = new human();




 $smarty->assign('man',$man);

 $smarty->display('01.html');












?>
