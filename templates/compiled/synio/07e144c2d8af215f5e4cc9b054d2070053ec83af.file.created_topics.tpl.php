<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 14:52:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/created_topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299338235049d205043600-45563259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e144c2d8af215f5e4cc9b054d2070053ec83af' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/created_topics.tpl',
      1 => 1345033360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299338235049d205043600-45563259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049d205084031_37713769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049d205084031_37713769')) {function content_5049d205084031_37713769($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_created.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>