<?php
defined('ACC')||exit('ACC Denied');

/**
 *
 */
class GoodsModel extends Model {
  protected $table = 'goods';//数据表名
  protected $pk = 'goods_id';


  /*
  作用：把商品放入回收站，即is_delete字段设置为1
  */
  public function trash($id){
    return $this->update(array('is_delete'=>1),$id);

  }
  public function getGoods(){
    $sql = 'select * from goods where is_delete=0';
    return $this->db->getAll($sql);
  }


}




 ?>
