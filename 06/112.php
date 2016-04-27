<?php

header('Content-type:text/html;charset=utf-8');

  class Human
  {
    public $name = 'lisi';
    
    public function who(){
      echo $this->name;
    }
  }

  $a = new Human;
  $a->who();

?>
