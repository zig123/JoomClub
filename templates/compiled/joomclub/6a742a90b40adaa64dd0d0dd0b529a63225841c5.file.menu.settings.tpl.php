<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:31:27
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1007194092505bed9fce1a43-27247819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a742a90b40adaa64dd0d0dd0b529a63225841c5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.settings.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1007194092505bed9fce1a43-27247819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuSubItemSelect' => 0,
    'oConfig' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bed9fd9a396_23376642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bed9fd9a396_23376642')) {function content_505bed9fd9a396_23376642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu'];?>
</h2>

<ul class="nav nav-pills">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='account'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
account/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_account'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='tuning'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
tuning/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_tuning'];?>
</a></li>
	
	<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='invite'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
invite/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_invite'];?>
</a>
		</li>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'menu_settings_settings_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_settings'),$_smarty_tpl);?>

		
		
		

<?php }} ?>