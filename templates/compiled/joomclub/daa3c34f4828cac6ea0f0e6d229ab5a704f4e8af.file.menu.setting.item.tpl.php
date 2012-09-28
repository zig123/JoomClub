<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 20:07:33
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/menu.setting.item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611909995505c90c5dc3af1-76415858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa3c34f4828cac6ea0f0e6d229ab5a704f4e8af' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/menu.setting.item.tpl',
      1 => 1347041325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611909995505c90c5dc3af1-76415858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c90c5e67700_78339066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c90c5e67700_78339066')) {function content_505c90c5e67700_78339066($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='userads'){?>class="active"<?php }?>>
	<a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
userads/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_menu_settings'];?>
</a>
</li>
<?php }} ?>