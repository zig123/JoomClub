<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 09:08:23
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.comment_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1938805900505bf647bf9e02-56831020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e644cc22cc7c7612ddf6df7a78184b330ced4b9a' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.comment_new.tpl',
      1 => 1347100680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938805900505bf647bf9e02-56831020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserComment' => 0,
    'oTopic' => 0,
    'oConfig' => 0,
    'oComment' => 0,
    'sSubscribeKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bf647cd3863_45756809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bf647cd3863_45756809')) {function content_505bf647cd3863_45756809($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getLogin();?>
</a> оставил новый комментарий к топику <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b>, прочитать его можно перейдя по <a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
">этой ссылке</a><br>
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_comment')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>
</i>				
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sSubscribeKey']->value){?>
	<br><br>
	<a href="<?php echo smarty_function_router(array('page'=>'subscribe'),$_smarty_tpl);?>
unsubscribe/<?php echo $_smarty_tpl->tpl_vars['sSubscribeKey']->value;?>
/">Отписаться от новых комментариев к этому топику</a>
<?php }?>

<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>