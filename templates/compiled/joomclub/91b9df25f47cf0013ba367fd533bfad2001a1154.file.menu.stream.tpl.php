<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 18:01:18
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639106367505c732ee54e51-67557590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91b9df25f47cf0013ba367fd533bfad2001a1154' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.stream.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639106367505c732ee54e51-67557590',
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
  'unifunc' => 'content_505c732f346a26_90603654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c732f346a26_90603654')) {function content_505c732f346a26_90603654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
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