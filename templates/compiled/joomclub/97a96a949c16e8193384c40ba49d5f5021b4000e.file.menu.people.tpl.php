<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719197745505be4d1535275-03119282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a96a949c16e8193384c40ba49d5f5021b4000e' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.people.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719197745505be4d1535275-03119282',
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
  'unifunc' => 'content_505be4d1568a64_47340151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1568a64_47340151')) {function content_505be4d1568a64_47340151($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><nav class="btn-group" style="margin-bottom: 20px">
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_all'];?>
</a>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='online'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
online/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_online'];?>
</a>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='new'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_new'];?>
</a>
  <?php echo smarty_function_hook(array('run'=>'menu_people_people_item'),$_smarty_tpl);?>

</nav>
<?php echo smarty_function_hook(array('run'=>'menu_people'),$_smarty_tpl);?>

<?php }} ?>