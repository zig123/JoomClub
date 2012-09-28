<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 16:28:50
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.comment_reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17248223525049e882f3d230-29178401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c56ca66ad1ce9700d702c68da4dbdc4ee8f45d02' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.comment_reply.tpl',
      1 => 1345033369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17248223525049e882f3d230-29178401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserComment' => 0,
    'oTopic' => 0,
    'oConfig' => 0,
    'oComment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049e8830fd425_87354388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049e8830fd425_87354388')) {function content_5049e8830fd425_87354388($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getLogin();?>
</a> ответил на ваш комментарий в топике <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b>, прочитать его можно перейдя по <a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
">этой ссылке</a><br>							
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_comment')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>
</i>	
<?php }?>				
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>