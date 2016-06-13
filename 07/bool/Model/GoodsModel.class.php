<?php
defined('ACC')||exit('ACC Denied');

/**
 *
 */
class GoodsModel extends Model
{
  protected $table = 'goods';//数据表名


  /*
    参数：parm array $data
    返回值：bool
  */
  public function add($data){
    return $this->db->autoExecute($this->table,$data);
  }

}


 ?>
