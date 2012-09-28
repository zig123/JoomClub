<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 07:25:47
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/list.rating.scroll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1941764064505be4db294b14-19869970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d8e02deb558f27c072f823eb013b2b03bbea63' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/list.rating.scroll.tpl',
      1 => 1348284339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941764064505be4db294b14-19869970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db2ff829_26651492',
  'variables' => 
  array (
    'aUsersList' => 0,
    'oUserList' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db2ff829_26651492')) {function content_505be4db2ff829_26651492($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
  <div class="row-fluid">
	<?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
      <div class="span4">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(100);?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"/>
			</a>
			<h5>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
</a>
			</h5>
      </div>
	<?php } ?>
  </div>
<div class="clear"></div>


<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>

<?php }?>
<?php }} ?>