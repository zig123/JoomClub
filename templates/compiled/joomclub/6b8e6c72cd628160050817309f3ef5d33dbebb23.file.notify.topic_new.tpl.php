<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 19:10:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.topic_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1411452044505c837deefba8-71116684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8e6c72cd628160050817309f3ef5d33dbebb23' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/notify/russian/notify.topic_new.tpl',
      1 => 1347100681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411452044505c837deefba8-71116684',
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
  'unifunc' => 'content_505c837e040cf7_47084408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c837e040cf7_47084408')) {function content_505c837e040cf7_47084408($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
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