<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 04:57:13
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6717977505be4db3d11e4-54493580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91022b7db306b31ecfdbe373259f8c749097106' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.topic.tpl',
      1 => 1348361345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6717977505be4db3d11e4-54493580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db3dc7e8_89464849',
  'variables' => 
  array (
    'UserList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db3dc7e8_89464849')) {function content_505be4db3dc7e8_89464849($_smarty_tpl) {?><section class="span4 blocktopic">
	<header class="block-header">
		<h3>Авторы</h3>
	</header>
	<div class="block-content">
		<?php echo $_smarty_tpl->tpl_vars['UserList']->value;?>

	</div>		
</section><?php }} ?>