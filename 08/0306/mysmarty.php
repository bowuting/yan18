<?php

//用来对继承来统一完成smarty的配置

/**
 *
 */

class MySmarty extends Smarty
{
    public function __construct(){
            //似有属性的修改  set方法
            parent::__construct();
            $this->setTemplateDir('./temp');
            $this->setCompileDir('./comp');
    }


}

















 ?>
