<?php
class TestModel{
  protected $table = 'test';
  protected $db = NULL;

  public function __construct(){
    $this->db = mysql::getIns();
  }

  //用户注册方法：
  public function reg($data){
    return $this->db->autoExecute($this->table,$data);
  }

}
?>
