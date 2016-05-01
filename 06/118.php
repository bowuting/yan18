<?php

header('Content-type:text/html;charset=utf-8');

  /**
   *
   */
  class Human
  {

    private $wife = '小甜甜';

    public $age = 22;
    public function cry(){
      echo "55555<br />";
    }
    public function pshow(){
      echo $this->wife;
    }
  }

/**
 *
 */
class Stu extends Human
{
  private $wife = '奶茶妹';

  public $height = 180;



  public function sshow(){
    echo $this->wife;

    echo "<br />";
    parent::pshow();
    echo "<br />";
  }
}


$lisi = new Stu();
print_r($lisi);
$lisi->sshow();




 ?>
