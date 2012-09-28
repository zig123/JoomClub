<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:56:09
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.talk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:593666704505be559da2e30-90316957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d01e5099ba9e2be8a3f91a21a411d1aca4ae4c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.talk.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '593666704505be559da2e30-90316957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuSubItemSelect' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'iCountTalkFavourite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be559e0e571_22368631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be559e0e571_22368631')) {function content_505be559e0e571_22368631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox'];?>
</h2>

<ul class="nav nav-pills">					
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='inbox'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox'];?>
</a></li>
	<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
inbox/new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox_new'];?>
</a></li>
	<?php }?>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='add'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox_create'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='favourites'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
favourites/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox_favourites'];?>
<?php if ($_smarty_tpl->tpl_vars['iCountTalkFavourite']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountTalkFavourite']->value;?>
)<?php }?></a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='blacklist'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
blacklist/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_menu_inbox_blacklist'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_talk_talk_item'),$_smarty_tpl);?>
	
</ul>

<?php echo smarty_function_hook(array('run'=>'menu_talk'),$_smarty_tpl);?>
<?php }} ?>