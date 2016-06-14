<?php
defined('ACC')||exit('ACC Denied');

/**
 *
 */
class GoodsModel extends Model {
  protected $table = 'goods';//数据表名
  protected $pk = 'goods_id';
  protected $fields = array('goods_id','goods_sn','cat_id','brand_id','goods_name','shop_price','market_price','goods_number','click_count','goods_weight','goods_brief','goods_desc','thumb_img','goods_img','ori_img','is_on_sale','is_delete','is_best','is_new','is_hot','add_time','last_update','keywords');

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
  public function getGoodsTrashed(){
    $sql = 'select * from goods where is_delete=1';
    return $this->db->getAll($sql);
  }


}




 ?>
