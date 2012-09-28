<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 09:27:11
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTalk/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202765822504ad72f025db9-78626097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fc6ec4e162f0c5c7adc489614cc152a61adeec9' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTalk/friends.tpl',
      1 => 1345033365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202765822504ad72f025db9-78626097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aUsersFriend' => 0,
    'oFriend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504ad72f0e7c04_65313672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504ad72f0e7c04_65313672')) {function content_504ad72f0e7c04_65313672($_smarty_tpl) {?><div class="talk-search talk-friends" id="block_talk_search">
	<header>
		<a href="#" class="link-dotted close" onclick="ls.talk.toggleSearchForm(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends'];?>
</a>
	</header>

	
	<div class="talk-search-content" id="block_talk_friends_content">
		<?php if ($_smarty_tpl->tpl_vars['aUsersFriend']->value){?>
			<ul class="friend-list" id="friends">
				<?php  $_smarty_tpl->tpl_vars['oFriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersFriend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFriend']->key => $_smarty_tpl->tpl_vars['oFriend']->value){
$_smarty_tpl->tpl_vars['oFriend']->_loop = true;
?>
					<li>
						<input id="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
" type="checkbox" name="friend[<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
]" class="input-checkbox" /> 
						<label for="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
" id="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
_label"><?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getLogin();?>
</label>
					</li>
				<?php } ?>
			</ul>
			
			<ul class="actions">
				<li><a href="#" id="friend_check_all" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_check'];?>
</a></li>
				<li><a href="#" id="friend_uncheck_all" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_uncheck'];?>
</a></li>
			</ul>
		<?php }else{ ?>
			<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_empty'];?>
</div>
		<?php }?>
	</div>
</div><?php }} ?>