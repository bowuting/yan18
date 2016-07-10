<?php 


defined('ACC') || exit('Acc Deined');

/**
* 
*/
class UserModel extends Model
{
	protected $table = 'user';
	protected $pk    = 'user_id';

	protected $fields = array('user_id','username','email','passwd','regtime','lastlogin');
	protected $_valid = array(
                            array('username',1,'用户名必须在4-16字符内','length','4,16'),
                            array('cat_id',1,'email非法','require'),
                            array('passwd',0,'passwd不能为空','require'),
                          
    );

}




 ?>
