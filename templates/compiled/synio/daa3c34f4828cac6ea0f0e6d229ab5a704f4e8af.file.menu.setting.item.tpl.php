<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 22:10:56
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/menu.setting.item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20475064965049873987d106-18780357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20475064965049873987d106-18780357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504987398dde52_56052119',
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504987398dde52_56052119')) {function content_504987398dde52_56052119($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='userads'){?>class="active"<?php }?>>
	<a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
userads/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_menu_settings'];?>
</a>
</li>
<?php }} ?>