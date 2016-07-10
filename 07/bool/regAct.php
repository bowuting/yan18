<?php 


//接收用户的表单信息 完成注册

print_r($_POST);

define('ACC',true);
require('./include/init.php');


$user = new UserModel();

$data = $user->_facade($_POST); 

if($user->add($data))
	echo "成功";
else{
	echo "失败";
}



 ?>
