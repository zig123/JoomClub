<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 04:57:13
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834412502505be4db49cdb3-65421307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1cfce66f9870e755b6baf51b6a923cd3310d95' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.comment.tpl',
      1 => 1348361344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834412502505be4db49cdb3-65421307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db4a7d31_60575631',
  'variables' => 
  array (
    'UserList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db4a7d31_60575631')) {function content_505be4db4a7d31_60575631($_smarty_tpl) {?><section class="span2 blockcomments">
	<header class="block-header">
		<h3>Комментатор</h3>
	</header>
	<div class="block-content">
		<?php echo $_smarty_tpl->tpl_vars['UserList']->value;?>

	</div>		
</section><?php }} ?>