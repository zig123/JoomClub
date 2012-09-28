<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 14:52:34
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.userfeedUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193853303505c46f208a1a8-61772080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9267492e705c1aae428d6774d24ab0ffe53d70b3' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.userfeedUsers.tpl',
      1 => 1347100652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193853303505c46f208a1a8-61772080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aUserfeedSubscribedUsers' => 0,
    'oUser' => 0,
    'iUserId' => 0,
    'aUserfeedFriends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c46f215f462_50042482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c46f215f462_50042482')) {function content_505c46f215f462_50042482($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	
	<script language="JavaScript" type="text/javascript">
		jQuery(document).ready( function() {
			jQuery('#userfeed_users_complete').keydown(function (event) {
				if (event.which == 13) {
					ls.userfeed.appendUser()
				}
			});
		 });
	</script>
	


	<section class="block block-type-activity">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_block_users_title'];?>
</h3>
		</header>
		
		<div class="block-content">
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_settings_note_follow_user'];?>
</small>
			
			<div class="stream-settings-userlist">
				<div class="search-form-wrapper">
					<div class="search-input-wrapper">
						<input type="text" id="userfeed_users_complete" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_block_users_append'];?>
" class="autocomplete-users input-text input-width-full" />
						<div onclick="ls.userfeed.appendUser();" class="input-submit"></div>
					</div>
				</div>
				
				<?php if (count($_smarty_tpl->tpl_vars['aUserfeedSubscribedUsers']->value)){?>
					<ul id="userfeed_block_users_list" class="user-list-mini max-height-200">
						<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserfeedSubscribedUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getId(), null, 0);?>
							
							<?php if (!isset($_smarty_tpl->tpl_vars['aUserfeedFriends']->value[$_smarty_tpl->tpl_vars['iUserId']->value])){?>
								<li><input class="userfeedUserCheckbox input-checkbox"
											type="checkbox"
											id="usf_u_<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
"
											checked="checked"
											onClick="if (jQuery(this).prop('checked')) { ls.userfeed.subscribe('users',<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } else { ls.userfeed.unsubscribe('users',<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } " />
									<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
								</li>
							<?php }?>
						<?php } ?>
					 </ul>
				<?php }else{ ?>
					<ul id="userfeed_block_users_list"></ul>
				<?php }?>
			</div>
		</div>
	</section>
	
	
	<?php if (count($_smarty_tpl->tpl_vars['aUserfeedFriends']->value)){?>
		<section class="block block-type-activity">
			<header class="block-header">
				<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_block_users_friends'];?>
</h3>
			</header>
			
			<div class="block-content">
				<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_settings_note_follow_friend'];?>
</small>
				
				<ul class="user-list-mini stream-settings-friends max-height-200">
					<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserfeedFriends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getId(), null, 0);?>
						
						<li><input class="userfeedUserCheckbox input-checkbox"
									type="checkbox"
									id="usf_u_<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
"
									<?php if (isset($_smarty_tpl->tpl_vars['aUserfeedSubscribedUsers']->value[$_smarty_tpl->tpl_vars['iUserId']->value])){?> checked="checked"<?php }?>
									onClick="if (jQuery(this).prop('checked')) { ls.userfeed.subscribe('users',<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } else { ls.userfeed.unsubscribe('users',<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } " />
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</section>
	<?php }?>
<?php }?><?php }} ?>