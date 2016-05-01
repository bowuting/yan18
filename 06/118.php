<?php

header('Content-type:text/html;charset=utf-8');

class Human{
	private $wife = '小甜甜';
	public function tell(){
		echo $this->wife,'<br />';
	}
	public function cry(){
		echo '555','<br />';
	}

}
/**
*
*/
class Stu extends Human
{
	private $wife= 'fengjie';
	public function sebtell(){
		echo $this->wife,'<br />';
	}

}

$stu = new Stu();
print_r($stu);




?>
