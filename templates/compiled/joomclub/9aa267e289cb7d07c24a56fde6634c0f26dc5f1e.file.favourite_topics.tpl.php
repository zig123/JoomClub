<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:31:17
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionProfile/favourite_topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1185609915505bed95c11784-12800528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa267e289cb7d07c24a56fde6634c0f26dc5f1e' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionProfile/favourite_topics.tpl',
      1 => 1347100669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185609915505bed95c11784-12800528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
    'aBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bed95d0a162_56352042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bed95d0a162_56352042')) {function content_505bed95d0a162_56352042($_smarty_tpl) {?><?php if (!is_callable('smarty_insert_block')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/insert.block.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_favourite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
	<?php $_smarty_tpl->createLocalArrayVariable('aBlockParams', null, 0);
$_smarty_tpl->tpl_vars['aBlockParams']->value['user'] = $_smarty_tpl->tpl_vars['oUserProfile']->value;?>
	<?php echo smarty_insert_block(array('block' => 'tagsFavouriteTopic', 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>