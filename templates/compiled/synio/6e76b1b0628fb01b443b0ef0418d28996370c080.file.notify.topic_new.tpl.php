<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 11:29:07
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.topic_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221295655049a2436dc690-12367352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e76b1b0628fb01b443b0ef0418d28996370c080' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/notify/russian/notify.topic_new.tpl',
      1 => 1345033370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221295655049a2436dc690-12367352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserTopic' => 0,
    'oBlog' => 0,
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049a2437a4176_18206468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049a2437a4176_18206468')) {function content_5049a2437a4176_18206468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserTopic']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserTopic']->value->getLogin();?>
</a> опубликовал в блоге <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b> новый топик -  <a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><br>
														
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>