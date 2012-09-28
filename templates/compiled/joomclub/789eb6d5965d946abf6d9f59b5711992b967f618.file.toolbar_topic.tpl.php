<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:994359011505be4db8550a0-52873833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789eb6d5965d946abf6d9f59b5711992b967f618' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/toolbar_topic.tpl',
      1 => 1347100648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '994359011505be4db8550a0-52873833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db864983_14724738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db864983_14724738')) {function content_505be4db864983_14724738($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i></i></a>
	</section>
<?php }?>

	
<?php }} ?>