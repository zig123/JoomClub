<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 18:01:19
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.streamConfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51666123505c732f3c0783-47503000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a6a8b78bda9a46f511168156a1d740cf4879ea1' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.streamConfig.tpl',
      1 => 1347100651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51666123505c732f3c0783-47503000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aStreamEventTypes' => 0,
    'oConfig' => 0,
    'sType' => 0,
    'aStreamTypesList' => 0,
    'langKey' => 0,
    'aStreamFriends' => 0,
    'oUser' => 0,
    'iUserId' => 0,
    'aStreamSubscribedUsers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c732f4d8694_09411139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c732f4d8694_09411139')) {function content_505c732f4d8694_09411139($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	
		<script type="text/javascript">
			jQuery(document).ready( function() {
				jQuery('#stream_users_complete').keydown(function (event) {
					if (event.which == 13) {
						ls.stream.appendUser()
					}
				});
			 });
		</script>
	


	<section class="block block-type-activity">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_block_config_title'];?>
</h3>
		</header>
		
		<div class="block-content">
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_settings_note_filter'];?>
</small>
			
			<ul class="activity-settings-filter">
				<?php  $_smarty_tpl->tpl_vars['aEventType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aEventType']->_loop = false;
 $_smarty_tpl->tpl_vars['sType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aStreamEventTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aEventType']->key => $_smarty_tpl->tpl_vars['aEventType']->value){
$_smarty_tpl->tpl_vars['aEventType']->_loop = true;
 $_smarty_tpl->tpl_vars['sType']->value = $_smarty_tpl->tpl_vars['aEventType']->key;
?>
					<?php if (!($_smarty_tpl->tpl_vars['oConfig']->value->get('module.stream.disable_vote_events')&&substr($_smarty_tpl->tpl_vars['sType']->value,0,4)=='vote')){?>
						<li>
							<label>
								<input class="streamEventTypeCheckbox input-checkbox"
									type="checkbox"
									id="strn_et_<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
"
									<?php if (in_array($_smarty_tpl->tpl_vars['sType']->value,$_smarty_tpl->tpl_vars['aStreamTypesList']->value)){?>checked="checked"<?php }?>
									onClick="ls.stream.switchEventType('<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
')" />
								<?php $_smarty_tpl->tpl_vars['langKey'] = new Smarty_variable("stream_event_type_".($_smarty_tpl->tpl_vars['sType']->value), null, 0);?>
								<?php echo $_smarty_tpl->tpl_vars['aLang']->value[$_smarty_tpl->tpl_vars['langKey']->value];?>

							</label>
						</li>
					<?php }?>
				<?php } ?>
			</ul>
		</div>
	</section>
		
		
		
	<section class="block block-type-activity">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_block_users_friends'];?>
</h3>
		</header>
		
		<div class="block-content">
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_settings_note_follow_friend'];?>
</small>
			
			<?php if (count($_smarty_tpl->tpl_vars['aStreamFriends']->value)){?>
				<ul class="stream-settings-friends user-list-mini max-height-200">
					<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStreamFriends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getId(), null, 0);?>
						<li><input class="streamUserCheckbox input-checkbox"
									type="checkbox"
									id="strm_u_<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
"
									<?php if (isset($_smarty_tpl->tpl_vars['aStreamSubscribedUsers']->value[$_smarty_tpl->tpl_vars['iUserId']->value])){?> checked="checked"<?php }?>
									onClick="if (jQuery(this).prop('checked')) { ls.stream.subscribe(<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } else { ls.stream.unsubscribe(<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
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
			<?php }else{ ?>
				<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_subscribed_users'];?>
</small>
			<?php }?>
		</div>
	</section>
		
		
		
	<section class="block block-type-activity">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_block_users_title'];?>
</h3>
		</header>
		
		<div class="block-content">
			<div class="search-form-wrapper">
				<div class="search-input-wrapper">
					<input type="text" id="stream_users_complete" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_block_config_append'];?>
" class="autocomplete-users input-text input-width-full" />
					<div onclick="ls.stream.appendUser();" class="input-submit"></div>
				</div>
			</div>
			
			<?php if (count($_smarty_tpl->tpl_vars['aStreamSubscribedUsers']->value)){?>
				<ul id="stream_block_users_list" class="user-list-mini max-height-200">
					<?php  $_smarty_tpl->tpl_vars['oUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStreamSubscribedUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUser']->key => $_smarty_tpl->tpl_vars['oUser']->value){
$_smarty_tpl->tpl_vars['oUser']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['iUserId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oUser']->value->getId(), null, 0);?>
						
						<?php if (!isset($_smarty_tpl->tpl_vars['aStreamFriends']->value[$_smarty_tpl->tpl_vars['iUserId']->value])){?>
							<li><input class="streamUserCheckbox input-checkbox"
										type="checkbox"
										id="strm_u_<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
"
										checked="checked"
										onClick="if (jQuery(this).prop('checked')) { ls.stream.subscribe(<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
) } else { ls.stream.unsubscribe(<?php echo $_smarty_tpl->tpl_vars['iUserId']->value;?>
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
				<ul id="stream_block_users_list"></ul>
				<p id="stream_no_subscribed_users"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_subscribed_users'];?>
</p>
			<?php }?>
		</div>
	</section>
<?php }?><?php }} ?>