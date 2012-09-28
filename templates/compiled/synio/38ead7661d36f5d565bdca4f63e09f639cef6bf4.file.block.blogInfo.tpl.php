<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 11:16:05
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27168807650499f358f2117-55660310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38ead7661d36f5d565bdca4f63e09f639cef6bf4' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogInfo.tpl',
      1 => 1345033323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27168807650499f358f2117-55660310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50499f3594c379_35398164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50499f3594c379_35398164')) {function content_50499f3594c379_35398164($_smarty_tpl) {?><section class="block">
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