<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 16:21:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5268981765049e6afe96ed4-81437989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5dfe47d5667ead17376c10c559ab79dc5d0774c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.stream.tpl',
      1 => 1345033312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5268981765049e6afe96ed4-81437989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049e6aff33ea1_84106458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049e6aff33ea1_84106458')) {function content_5049e6aff33ea1_84106458($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='user'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
user/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_user'];?>
</a></li>
	<?php }?>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
all/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_all'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_stream_item'),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_stream'),$_smarty_tpl);?>

<?php }} ?>