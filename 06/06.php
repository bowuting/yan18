

<?php

header('Content-type:text/html;charset=utf-8');

  /**
   *
   */
  class Human
  {
    public $name ;
    public $gender ;
    public function __construct($name,$gender)
    {
      echo "这是构造函数","<br />";
      $this->name = $name;
      $this->gender = $gender;
    }
    public function __destruct()
    {
        echo "析构函数","<br />";
    }
  }



  $a = new Human('bowuting','男');
  $b = new Human('ct','女');
  $c = new Human('mupan','女');


  echo $a->name,"<br />";
  echo $b->name,"<br />";
  echo $c->name,"<br />";

  echo $a->gender,"<br />";
  echo $b->gender,"<br />";
  echo $c->gender,"<br />";

//  unset($a);

 ?>
