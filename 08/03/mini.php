<?php

/**
 *
 */
class Mini {
  public $template_dir =  'template_dir';  //模板文件所在目录
  public $compile_dir = 'compile_dir';    //模板编译后存放的位置

  public $_tpl_var = array();

  public function assign($key,$value){
    $this->_tpl_var[$key] = $value;
  }

  /*
  string $template 模板文件名
  */
  public function display($template){
    $comp = $this->compile($template);
    include($comp);
  }

  /*
    string $template 模板文件名
    return
    流程：把指定的内容读出来，翻译成PHP
  */
  public function compile($template){

    //读出模板内容
    $source = file_get_contents($this->template_dir . '/' . $template);
    //echo $source;

    $source = str_replace('{$' , '<?php echo $this->_tpl_var[\'',$source);
    $source = str_replace("}" , '\']; ?>',$source);
    //echo $source;

    //再把编译后的文件班保存起来，
    $comp = $this->compile_dir . '/' . $template . '.php';
    file_put_contents($comp,$source);
    return $comp;

  }





}



 ?>
