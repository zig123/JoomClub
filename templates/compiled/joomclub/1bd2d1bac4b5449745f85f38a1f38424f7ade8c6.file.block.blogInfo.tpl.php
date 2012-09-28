<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:51:30
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607164872505bf2528f9270-06304598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd2d1bac4b5449745f85f38a1f38424f7ade8c6' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blogInfo.tpl',
      1 => 1347100651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607164872505bf2528f9270-06304598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bf252922f10_36238175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bf252922f10_36238175')) {function content_505bf252922f10_36238175($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info'];?>
</h3>
	</header>
	
	<div class="block-content">
		<p id="block_blog_info"></p>
	</div>	
</section>


<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note'];?>
</h3>
	</header>
	
	<div class="block-content">	
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note_text'];?>
</p>
	</div>	
</section><?php }} ?>