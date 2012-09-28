<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 10:50:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionAdmin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263107342505d5fb59ca963-91177915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91d612d364f6cb0b7ef134777161c4d4faf41ede' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionAdmin/index.tpl',
      1 => 1347100661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263107342505d5fb59ca963-91177915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d5fb5a40a59_37425366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d5fb5a40a59_37425366')) {function content_505d5fb5a40a59_37425366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_header'];?>
</h2>

<ul>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
plugins/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_plugins'];?>
</a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
userfields/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_userfields'];?>
</a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
restorecomment/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_restorecomment'];?>
</a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
recalcfavourite/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_recalcfavourite'];?>
</a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
recalcvote/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_recalcvote'];?>
</a></li>
    <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
recalctopic/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_recalctopic'];?>
</a></li>
    <?php echo smarty_function_hook(array('run'=>'admin_action_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'admin_action'),$_smarty_tpl);?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>