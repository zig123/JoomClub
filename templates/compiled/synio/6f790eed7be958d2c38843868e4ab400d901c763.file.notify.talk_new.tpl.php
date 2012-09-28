<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 09:28:15
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.talk_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048338594504ad76f9a7ca0-40124430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f790eed7be958d2c38843868e4ab400d901c763' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.talk_new.tpl',
      1 => 1345033370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048338594504ad76f9a7ca0-40124430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFrom' => 0,
    'oTalk' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504ad76fa4ee51_84867754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504ad76fa4ee51_84867754')) {function content_504ad76fa4ee51_84867754($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Вам пришло новое письмо от пользователя <a href="<?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getLogin();?>
</a>, прочитать и ответить на него можно перейдя по <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/">этой ссылке</a><br>
Тема письма: <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</b><br>
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_talk')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getText();?>
</i>	<br>			
<?php }?>
Не забудьте предварительно авторизоваться!
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>