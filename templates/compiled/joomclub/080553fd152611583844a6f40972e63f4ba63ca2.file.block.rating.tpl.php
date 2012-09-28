<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 05:26:00
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1909535668505be4db309992-84429313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080553fd152611583844a6f40972e63f4ba63ca2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/blocks/block.rating.tpl',
      1 => 1348363557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909535668505be4db309992-84429313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db314470_13160847',
  'variables' => 
  array (
    'UserList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db314470_13160847')) {function content_505be4db314470_13160847($_smarty_tpl) {?><section class="span6 blockrating">
	<header class="block-header">
		<h3>Блогеры</h3>
	</header>
	<div class="block-content">
		<?php echo $_smarty_tpl->tpl_vars['UserList']->value;?>

	</div>		
</section><?php }} ?>