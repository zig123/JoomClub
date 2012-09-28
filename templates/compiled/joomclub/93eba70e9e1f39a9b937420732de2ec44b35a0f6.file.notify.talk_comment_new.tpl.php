<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 14:17:24
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.talk_comment_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304845401505d9034185be9-90252400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93eba70e9e1f39a9b937420732de2ec44b35a0f6' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.talk_comment_new.tpl',
      1 => 1347100681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304845401505d9034185be9-90252400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFrom' => 0,
    'oTalk' => 0,
    'oTalkComment' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d90341e8d88_48080389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d90341e8d88_48080389')) {function content_505d90341e8d88_48080389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getLogin();?>
</a> оставил новый комментарий к письму <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b>, прочитать его можно перейдя по <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/#comment<?php echo $_smarty_tpl->tpl_vars['oTalkComment']->value->getId();?>
">этой ссылке</a><br>							
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_talk')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oTalkComment']->value->getText();?>
</i>	<br>			
<?php }?>
Не забудьте предварительно авторизоваться!							
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>