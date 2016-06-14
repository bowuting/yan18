<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/
defined('ACC')||exit('ACC Denied');
class Model {
    protected $table = NULL; // 是model所控制的表
    protected $db = NULL; // 是引入的mysql对象
    protected $pk = '';

    public function __construct() {
        $this->db = mysql::getIns();
    }

    public function table($table) {
        $this->table = $table;
    }


    /*
    往表里增加数据
    输入：数组
    返回：bool
    */
    public function add($data){
    return  $this->db->autoExecute($this->table,$data);
    }

    /*
    表里删除数据
    输入：parm int $id
    返回：int 影响的行树
    */
    public function delete($id=0) {
        $sql = 'delete from ' . $this->table . ' where '.$this->pk.'='.$id;

        if($this->db->query($sql)){
          return $this->db->affected_rows();
        } else {
          return false;
        }
    }

    /*
    更改
    parm array $data
    parm int   $id
    return int  影响行数
    */
    public function update($data,$id){

      $rs = $this->db->autoExecute($this->table,$data,'update',' where ' . $this->pk . '=' . $id);
      if($rs){
        return $this->db->affected_rows();
      } else {
        return false;
      }
    }

    public function select(){
      $sql = 'select * from '. $this->table;
      return $this->db->getAll($sql);
    }

    /*
    parm int $id
    return  Array
    */
    public function find($id){
      $sql = 'select * from ' . $this->table . ' where ' . $this->pk . '=' .$id;
      return $this->db->getRow($sql);
    }



}
