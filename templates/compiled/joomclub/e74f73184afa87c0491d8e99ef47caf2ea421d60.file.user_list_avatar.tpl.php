<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/user_list_avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:795608459505be4d16a39d4-21539121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74f73184afa87c0491d8e99ef47caf2ea421d60' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/user_list_avatar.tpl',
      1 => 1347100649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '795608459505be4d16a39d4-21539121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersList' => 0,
    'oUserList' => 0,
    'sUserListEmpty' => 0,
    'aLang' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d16e5174_67966747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d16e5174_67966747')) {function content_505be4d16e5174_67966747($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
  <?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getSession(), null, 0);?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
" style="display: block; padding: 5px"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
  <?php } ?>
<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['sUserListEmpty']->value){?>
		<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['sUserListEmpty']->value;?>
</div>
	<?php }else{ ?>
		<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>
</div>
	<?php }?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>
<?php }} ?>