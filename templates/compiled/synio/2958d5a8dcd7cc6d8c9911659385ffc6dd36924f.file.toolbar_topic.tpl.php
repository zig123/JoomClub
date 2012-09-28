<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 23:21:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17681700045048f7b9c25ff6-27910206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2958d5a8dcd7cc6d8c9911659385ffc6dd36924f' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/toolbar_topic.tpl',
      1 => 1345033314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17681700045048f7b9c25ff6-27910206',
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
  'unifunc' => 'content_5048f7b9c50779_03457778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048f7b9c50779_03457778')) {function content_5048f7b9c50779_03457778($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i></i></a>
	</section>
<?php }?>

	
<?php }} ?>