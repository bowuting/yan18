<?php

defined('ACC')||exit('ADC denied');


  /*
  * 单文件长传类
  * 文件的后缀
  * 获取文件的大小
  * 获取文件后缀
  * 判断文件的后缀
  * 良好的报错支持
  */

class UpTool{
  protected $allowExt = 'jpg,jpeg,gif,bmp,png';
  protected $maxSize  = 1;  //1M

  public $erron = 0;
  protected $error = array(
                    0=>'无错误',
                    1=>'上传文件超出系统限制',
                    2=>'上传大小超出网页表单页面',
                    3=>'只有部分文件被上传',
                    4=>'没有文件被上传',
                    6=>'找不到临时文件夹',
                    7=>'文件写入失败',
                    8=>'不允许的文件后缀',
                    9=>'文件大小超出类的允许',
                    10=>'创建目录失败',
                    11=>'移动失败',
                        );



  public function up($key){
    if (!isset($_FILES[$key])) {
      return false;
    }
    $f = $_FILES[$key];

    if ($f['error']) {
      $this->errno = $f['error'];
      return false;
    }

    //获取后缀
   $ext = $this->getExt($f['name']);
    //检查后缀
    if (!$this->isAllowExt($ext)) {
      $this->errno = 8;
      return false;
    }

    //检查大小
    if (!$this->isAlloewSize($f['size'])) {
      $this->errno = 9;
      return false;
    }

    //通过的话
    $dir = $this->mk_dir();
    if ($dir == false) {
      $this->errno = 10;
      return false;
    }

    //生成随机文件名
    $newname = $this->randName() . '.' . $ext;

    // 移动
    if(!move_uploaded_file($f['tmp_name'],$dir . $newname)){
      $this->errno = 11;
      return false;
    }

    $dir .= $newname;
    return str_replace(ROOT,'',$dir);
}




  protected function getFile($key){
    $this->file = $_FILE[$key];
  }
  protected function isAlloewSize($size){
    return $size <= $this->maxSize * 1024 * 1024;
  }

  protected function getExt($file){
    $tmp = explode('.',$file);
    return end($tmp);
  }

  protected function isAllowExt($ext){
    return in_array(strtolower($ext),explode(',',strtolower($this->allowExt)));
  }


  /*
  按日期创建目录
  */
  protected function mk_dir(){
    $dir = ROOT . 'data/img/' . date('Ym/d') . '/';
    if (is_dir($dir) || mkdir($dir,0777,true)) {
      return $dir;
    } else {
      return false;
    }
  }

  /*
    生成随机文件名
  */
  protected function randName($length = 0){
    $str = 'abcdefghijklmnopqrstuvwxyz1234567890';
    return substr(str_shuffle($str),0,6);

  }


  public function getError(){
    return $this->error[$this->errno];
  }
  public function setExt($exts){
    $this->allowExt .=  ',' . $exts;
  }

  public function setSize($num){
    $this->maxSize = $num;
  }
}







 ?>
