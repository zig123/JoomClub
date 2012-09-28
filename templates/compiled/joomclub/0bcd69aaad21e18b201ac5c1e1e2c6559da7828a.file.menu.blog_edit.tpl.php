<?php /* Smarty version Smarty-3.1.8, created on 2012-09-28 00:24:28
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.blog_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17827094295064b5fc45c139-18014643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bcd69aaad21e18b201ac5c1e1e2c6559da7828a' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.blog_edit.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17827094295064b5fc45c139-18014643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oBlogEdit' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5064b5fc4fa5b9_00904123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5064b5fc4fa5b9_00904123')) {function content_5064b5fc4fa5b9_00904123($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogEdit']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h2>

<ul class="nav nav-pills">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='admin'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
admin/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_blog_edit_admin_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_blog_edit'),$_smarty_tpl);?>
<?php }} ?>