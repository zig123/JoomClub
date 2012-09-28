<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:42:47
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43372641050498957d4f2b2-78639745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4060b2eae97a16052625935e4a5ce3a1795339b8' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.registration.tpl',
      1 => 1345033370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43372641050498957d4f2b2-78639745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUser' => 0,
    'sPassword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498957ddc9e9_41872593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498957ddc9e9_41872593')) {function content_50498957ddc9e9_41872593($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Вы зарегистрировались на сайте <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><br>
Ваши регистрационные данные:<br>
&nbsp;&nbsp;&nbsp;логин: <b><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</b><br>
&nbsp;&nbsp;&nbsp;пароль: <b><?php echo $_smarty_tpl->tpl_vars['sPassword']->value;?>
</b><br>						
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>