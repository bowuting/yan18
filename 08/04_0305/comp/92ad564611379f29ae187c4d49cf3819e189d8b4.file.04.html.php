<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-14 11:55:43
         compiled from "./temp/04.html" */ ?>
<?php /*%%SmartyHeaderCode:38641364157afe8f4178e09-95686246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-14 12:54:45
         compiled from "./temp/04.html" */ ?>
<?php /*%%SmartyHeaderCode:54204510957afedf3312ec8-35611553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> a8dcbf77b35b32c2e2e98d4022ef6ff3b6d7ff74
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ad564611379f29ae187c4d49cf3819e189d8b4' => 
    array (
      0 => './temp/04.html',
<<<<<<< HEAD
      1 => 1471146942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38641364157afe8f4178e09-95686246',
=======
      1 => 1471150478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54204510957afedf3312ec8-35611553',
>>>>>>> a8dcbf77b35b32c2e2e98d4022ef6ff3b6d7ff74
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
<<<<<<< HEAD
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
=======
  'unifunc' => 'content_57afedf3392c67_33922402',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57afedf3392c67_33922402')) {function content_57afedf3392c67_33922402($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('site.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo $_GET['id'];?>

    <?php echo @constant('HEI');?>


    <div class="">
      本站的网址 <?php echo $_smarty_tpl->getConfigVariable('site');?>

      <br />
      用#读取配置文件的值<?php echo $_smarty_tpl->getConfigVariable('hao');?>

      <br />
      电话： <?php echo $_smarty_tpl->getConfigVariable('tel');?>

    </div>

  </body>
>>>>>>> a8dcbf77b35b32c2e2e98d4022ef6ff3b6d7ff74
</html>
<?php }} ?>