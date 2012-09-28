<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 07:02:33
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionProfile/wall_items_reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121491395505be4d1933aa2-54448137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c1bb367d71961df8573bbefe73d9b1aec35091e' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionProfile/wall_items_reply.tpl',
      1 => 1348369349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121491395505be4d1933aa2-54448137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d19912b5_53897193',
  'variables' => 
  array (
    'aReplyWall' => 0,
    'oReplyWall' => 0,
    'oReplyUser' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d19912b5_53897193')) {function content_505be4d19912b5_53897193($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['oReplyWall'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oReplyWall']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aReplyWall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oReplyWall']->key => $_smarty_tpl->tpl_vars['oReplyWall']->value){
$_smarty_tpl->tpl_vars['oReplyWall']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars["oReplyUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oReplyWall']->value->getUser(), null, 0);?>
	<div id="wall-reply-item-<?php echo $_smarty_tpl->tpl_vars['oReplyWall']->value->getId();?>
" class="js-wall-reply-item wall-item-reply span10" style="margin-top: 10px">
		<a href="<?php echo $_smarty_tpl->tpl_vars['oReplyUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oReplyUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" width="16" height="16" /></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oReplyUser']->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['oReplyUser']->value->getLogin();?>
</a> ·
		<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oReplyWall']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oReplyWall']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</time>
		<?php if ($_smarty_tpl->tpl_vars['oReplyWall']->value->isAllowDelete()){?><a href="#" onclick="return ls.wall.remove(<?php echo $_smarty_tpl->tpl_vars['oReplyWall']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_action_delete'];?>
</a><?php }?>
		<div class="actions" style="margin-top: 10px; margin-bottom: 10px">
		  <?php echo $_smarty_tpl->tpl_vars['oReplyWall']->value->getText();?>

		</div>
	</div>
<?php } ?><?php }} ?>