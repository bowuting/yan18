<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-14 11:55:43
         compiled from "./temp/04.html" */ ?>
<?php /*%%SmartyHeaderCode:38641364157afe8f4178e09-95686246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ad564611379f29ae187c4d49cf3819e189d8b4' => 
    array (
      0 => './temp/04.html',
      1 => 1471146942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38641364157afe8f4178e09-95686246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57afe8f41b6875_78670592',
  'variables' => 
  array (
    'name' => 0,
    'poem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57afe8f41b6875_78670592')) {function content_57afe8f41b6875_78670592($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
        <h2><?php echo $_smarty_tpl->tpl_vars['poem']->value;?>
</h2>
    
        <p>
            <?php echo $_GET['id'];?>

        </p>
    </body>
</html>
<?php }} ?>