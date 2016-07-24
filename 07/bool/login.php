<?php
/****
用户登陆页面
****/


define('ACC',true);
require('./include/init.php');


if (isset($_POST['act'])) {

	//说明已经登陆

	$u = $_POST['username'];
	$p = $_POST['passwd'];
 	//合法性检测

 	//核对用户名 密码

 	$user = new UserModel();

 	$row = $user->checkUser($u,$p);
 	if (empty($row)) {
 		$msg = '用户名或密码不匹配';
 	} else{
 		$msg = '登陆成功';
 		session_start();
 		$_SESSION = $row;

		if (isset($_POST['remember'])) {
			setcookie('remuser',$u,time()+14*24*3600);
		} else {

			setcookie('remuser','',0);
		}

 	}

 	include (ROOT .  '/view/front/msg.html');
 	exit;
} else {
	//未登陆

	include (ROOT  . '/view/front/denglu.html');


}





 ?>
