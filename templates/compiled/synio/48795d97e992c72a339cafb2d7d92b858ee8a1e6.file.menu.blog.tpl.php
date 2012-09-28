<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:18:35
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6463536675048e8fb963936-12297379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48795d97e992c72a339cafb2d7d92b858ee8a1e6' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.blog.tpl',
      1 => 1346486311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6463536675048e8fb963936-12297379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'sEvent' => 0,
    'aLang' => 0,
    'iCountTopicsNew' => 0,
    'sMenuSubItemSelect' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e8fba1ea80_88817452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fba1ea80_88817452')) {function content_5048e8fba1ea80_88817452($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><nav class="btn-group" style="margin-bottom: 20px">
  <span class="btn">Блоги  →  </span>
  <a class="<?php if (($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'&&$_smarty_tpl->tpl_vars['sEvent']->value!='new')){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all'];?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['iCountTopicsNew']->value>0){?>
    <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_new'];?>
 +<?php echo $_smarty_tpl->tpl_vars['iCountTopicsNew']->value;?>
</a>
  <?php }?>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective'];?>
</a>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal'];?>
</a>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_discussed'];?>
</a>
  <?php echo smarty_function_hook(array('run'=>'menu_blog_index_item'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
  <a class="<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='feed'){?>active <?php }?>btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_title'];?>
</a>
<?php }?>
<?php echo smarty_function_hook(array('run'=>'menu_blog'),$_smarty_tpl);?>

</nav><?php }} ?>