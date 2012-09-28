<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:349231314504987417b8404-90272516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d67e5c5e09dc01672742d0cdcf6290599d20fa2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.invite.tpl',
      1 => 1345033369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349231314504987417b8404-90272516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFrom' => 0,
    'oInvite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498741802ec0_39494745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498741802ec0_39494745')) {function content_50498741802ec0_39494745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getLogin();?>
</a>  пригласил вас зарегистрироваться на сайте <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><br>
Код приглашения:  <b><?php echo $_smarty_tpl->tpl_vars['oInvite']->value->getCode();?>
</b><br>
Для регистрации вам будет необходимо ввести код приглашения на <a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
">странице входа</a>													
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
							<?php }} ?>