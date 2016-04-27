<?php

header('Content-type:text/html;charset=utf-8');
  echo "<hr />";
  class Human
  {
    public $name ;
    public $gender ;

    public function __destruct()
    {
        //echo $this->name,"<br />";
        echo "析构函数","<br />";
    }
  }

$a = new Human;




?>
