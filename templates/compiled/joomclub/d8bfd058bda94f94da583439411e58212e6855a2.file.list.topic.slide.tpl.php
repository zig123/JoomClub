<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 07:25:47
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/list.topic.slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980646900505be4db329882-23405358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8bfd058bda94f94da583439411e58212e6855a2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/topusers/templates/skin/default/list.topic.slide.tpl',
      1 => 1348284339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1980646900505be4db329882-23405358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db385d77_14306621',
  'variables' => 
  array (
    'aUsersList' => 0,
    'oUserList' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db385d77_14306621')) {function content_505be4db385d77_14306621($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
  <div class="row-fluid">
		<?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
      <div class="span6">
		                <a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getUserWebPath();?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getProfileAvatarPath(100);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getLogin();?>
"/>
						</a>
					<h5>
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUser()->getLogin();?>
</a>
					</h5>
      </div>
		<?php } ?>
  </div>
<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>

<?php }?><?php }} ?>