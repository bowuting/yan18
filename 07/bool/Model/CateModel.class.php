<?php

class CateModel extends Model{
  protected $table = 'category';//数据库表名

  /*
  你给我一个关键数组，键-表中的列，值-表中的值
  add()函数自动插入该行数据，
  */
  public function add($data){
    return $this->db->autoExecute($this->table,$data);
  }

  //获取本表中所有的数据
  public function select(){
    $sql = 'select cat_id,cat_name,intro,parent_id from category';
    return $this->db->getAll($sql);
  }

  //$id栏目的子孙树
  public function getCatTree($arr,$id = 0,$lev = 0){
    $tree = array();
    foreach ($arr as $v) {
        if ($v['parent_id'] == $id) {
            $v['lev'] = $lev;
            $tree[] = $v;

            $tree =  array_merge($tree,$this->getCatTree($arr,$v['cat_id'],$lev+1));
        }
    }
    return $tree;
  }
}



 ?>
