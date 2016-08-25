<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-16 11:06:17
         compiled from "./temp/05.html" */ ?>
<?php /*%%SmartyHeaderCode:35256520957b122293322d7-89422502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7a8b8b2b52c15f421a0b415d8afdefe63605c0' => 
    array (
      0 => './temp/05.html',
      1 => 1471316757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35256520957b122293322d7-89422502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57b122293bc579_91419267',
  'variables' => 
  array (
    'name' => 0,
    'age' => 0,
    'arr' => 0,
    'stu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b122293bc579_91419267')) {function content_57b122293bc579_91419267($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      <?php echo $_smarty_tpl->tpl_vars['age']->value;?>


      <?php echo $_smarty_tpl->tpl_vars['arr']->value['country']['prov']['city'];?>


      <?php echo $_smarty_tpl->tpl_vars['stu']->value[0];?>

      <?php echo $_smarty_tpl->tpl_vars['stu']->value[1];?>


  </body>
</html>
<?php }} ?>