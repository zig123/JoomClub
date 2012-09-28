<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:56:09
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104449701505be559e12859-79144772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd01582cbe6a479ea01f8dc38f2b9054062b1bf' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/friends.tpl',
      1 => 1347100677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104449701505be559e12859-79144772',
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
  'unifunc' => 'content_505be559e58055_64821778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be559e58055_64821778')) {function content_505be559e58055_64821778($_smarty_tpl) {?><div class="talk-search talk-friends" id="block_talk_search">
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