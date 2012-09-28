<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146766764504987397dd1a4-22326588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79824a9d20e2c3265b115db6c21510a82d42ad68' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.settings.tpl',
      1 => 1345033312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146766764504987397dd1a4-22326588',
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
  'unifunc' => 'content_50498739876ce4_10617104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498739876ce4_10617104')) {function content_50498739876ce4_10617104($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
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