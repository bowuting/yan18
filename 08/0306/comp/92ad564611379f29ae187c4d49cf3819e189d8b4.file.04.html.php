<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-26 09:41:54
         compiled from "./temp/04.html" */ ?>
<?php /*%%SmartyHeaderCode:165999066557be802eb3ed56-19321055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ad564611379f29ae187c4d49cf3819e189d8b4' => 
    array (
      0 => './temp/04.html',
      1 => 1472175711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165999066557be802eb3ed56-19321055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57be802eb7ac34_53547587',
  'variables' => 
  array (
    'price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57be802eb7ac34_53547587')) {function content_57be802eb7ac34_53547587($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['price']->value>10000){?>
            喜欢
            <?php }else{ ?>
            不喜欢
            <?php }?>
        </p>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['price']->value>5000){?>
            喜欢
            <?php }?>
        </p>
        <p>
            从地址栏从传值
            <?php if ($_GET['today']==0||$_GET['today']==7){?>
            今天是周日
            <?php }elseif($_GET['today']==6){?>
            今天是周六
            <?php }else{ ?>
            今天是工作日
            <?php }?>
        </p>
    </body>
</html>
<?php }} ?>