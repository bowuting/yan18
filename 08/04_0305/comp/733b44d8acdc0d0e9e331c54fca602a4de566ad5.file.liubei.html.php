<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-12 22:48:46
         compiled from "./temp/liubei.html" */ ?>
<?php /*%%SmartyHeaderCode:28319350357ade1cea3d6c8-43466100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733b44d8acdc0d0e9e331c54fca602a4de566ad5' => 
    array (
      0 => './temp/liubei.html',
      1 => 1471013300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28319350357ade1cea3d6c8-43466100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'age' => 0,
    'weapon' => 0,
    'zhangfei' => 0,
    'guanyu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57ade1ceaa42b3_41606422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ade1ceaa42b3_41606422')) {function content_57ade1ceaa42b3_41606422($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <tr><td>姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td></tr>
    <tr><td>年龄：</td><td><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</td></tr>
    <tr><td>兵器：</td><td><?php echo $_smarty_tpl->tpl_vars['weapon']->value;?>
</td></tr>


    <tr><td>姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['zhangfei']->value['name'];?>
</td></tr>
    <tr><td>年龄：</td><td><?php echo $_smarty_tpl->tpl_vars['zhangfei']->value['age'];?>
</td></tr>
    <tr><td>兵器：</td><td><?php echo $_smarty_tpl->tpl_vars['zhangfei']->value['weapon'];?>
</td></tr>

    <tr><td>姓名：</td><td><?php echo $_smarty_tpl->tpl_vars['guanyu']->value[0];?>
</td></tr>
    <tr><td>年龄：</td><td><?php echo $_smarty_tpl->tpl_vars['guanyu']->value[1];?>
</td></tr>
    <tr><td>兵器：</td><td><?php echo $_smarty_tpl->tpl_vars['zhangfei']->value['weapon'];?>
</td></tr>
  </body>
</html>
<?php }} ?>