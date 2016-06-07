<?php

class Model{
  protected $table = NULL;
  protected $db = NULL;

  public function __construct(){
    $this->db = mysql::getIns();
  }
}






 ?>
