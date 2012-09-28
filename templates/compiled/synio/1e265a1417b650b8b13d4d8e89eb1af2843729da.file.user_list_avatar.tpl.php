<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/user_list_avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27684317850498731dcccf1-88145634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e265a1417b650b8b13d4d8e89eb1af2843729da' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/user_list_avatar.tpl',
      1 => 1346224807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27684317850498731dcccf1-88145634',
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
  'unifunc' => 'content_50498731e501f7_36574636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498731e501f7_36574636')) {function content_50498731e501f7_36574636($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
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