<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 13:28:41
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/wall_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567538840504b0fc942d917-87662779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c472407079dfcd6a8147158187fb3a2d95548176' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/wall_items.tpl',
      1 => 1345033361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567538840504b0fc942d917-87662779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aWall' => 0,
    'oWall' => 0,
    'oWallUser' => 0,
    'oUserCurrent' => 0,
    'aReplyWall' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504b0fc95b6944_25035948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504b0fc95b6944_25035948')) {function content_504b0fc95b6944_25035948($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_modifier_declension')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/modifier.declension.php';
?><?php  $_smarty_tpl->tpl_vars['oWall'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oWall']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aWall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oWall']->key => $_smarty_tpl->tpl_vars['oWall']->value){
$_smarty_tpl->tpl_vars['oWall']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars["oWallUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oWall']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["aReplyWall"] = new Smarty_variable($_smarty_tpl->tpl_vars['oWall']->value->getLastReplyWall(), null, 0);?>

	<div id="wall-item-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
" class="js-wall-item wall-item-wrapper">
		<div class="wall-item">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
			
			<p class="info">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getLogin();?>
</a> ·
				<time class="date" datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oWall']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oWall']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</time>
			</p>

			<div class="wall-item-content text">
				<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getText();?>

			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
				<ul class="actions wall-item-actions">
					<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['aReplyWall']->value){?>
						<li><a href="#" class="link-dotted" onclick="return ls.wall.toggleReply(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_action_reply'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['oWall']->value->isAllowDelete()){?>
						<li><a href="#" onclick="return ls.wall.remove(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_action_delete'];?>
</a></li>
					<?php }?>
				</ul>
			<?php }?>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['aReplyWall']->value){?>
			<div class="wall-item-replies" id="wall-item-replies-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
">
				<?php if (count($_smarty_tpl->tpl_vars['aReplyWall']->value)<$_smarty_tpl->tpl_vars['oWall']->value->getCountReply()){?>
					<a href="#" onclick="return ls.wall.loadReplyNext(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);" id="wall-reply-button-next-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
" class="wall-more-reply">
						<span class="wall-more-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_load_reply_more'];?>
 <span id="wall-reply-count-next-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oWall']->value->getCountReply();?>
</span> <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oWall']->value->getCountReply(),$_smarty_tpl->tpl_vars['aLang']->value['comment_declension'],'russian');?>
</span>
					</a>
				<?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['aReplyWall']->value){?>
					<div class="wall-item-container" id="wall-reply-container-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
">
						<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/wall_items_reply.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<form class="wall-submit wall-submit-reply" <?php if (!$_smarty_tpl->tpl_vars['aReplyWall']->value){?>style="display: none"<?php }?>>
				<textarea rows="4" id="wall-reply-text-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
" class="input-text input-width-full js-wall-reply-text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_reply_placeholder'];?>
" onclick="return ls.wall.expandReply(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);"></textarea>
				<button type="button" onclick="ls.wall.addReply(jQuery('#wall-reply-text-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
').val(), <?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);" class="button button-primary js-button-wall-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_reply_submit'];?>
</button>
			</form>
		<?php }?>
	</div>
<?php } ?><?php }} ?>