<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:44:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/friend_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1831198860504989cd4a7d16-85389021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '233cd1bf99cf14c94f6e59c5298c9fb7c70ee77b' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/friend_item.tpl',
      1 => 1346134772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831198860504989cd4a7d16-85389021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFriend' => 0,
    'USER_FRIEND_ACCEPT' => 0,
    'USER_FRIEND_OFFER' => 0,
    'aLang' => 0,
    'oUserProfile' => 0,
    'USER_FRIEND_REJECT' => 0,
    'oUserCurrent' => 0,
    'USER_FRIEND_NULL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504989cd645c22_26343961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504989cd645c22_26343961')) {function content_504989cd645c22_26343961($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserFriend']->value&&($_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value||$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value)){?>
	<li id="delete_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_del'];?>
" onclick="return ls.user.removeFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'del');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_del'];?>
</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getStatusTo()==$_smarty_tpl->tpl_vars['USER_FRIEND_REJECT']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getStatusFrom()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_REJECT']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_offer_reject'];?>
</li>							
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_NULL']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserFrom()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_offer_send'];?>
</li>						
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_NULL']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }elseif(!$_smarty_tpl->tpl_vars['oUserFriend']->value){?>
<li id="add_friend_item"><a data-toggle="modal" href="#friendadd" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<div class="modal fade" id="friendadd" data-target="#friendadd">
  <div class="modal-header">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_add_friend'];?>
</h3>
  </div>
  <div class="modal-body">
    <form onsubmit="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'add');" class="modal-content">
      <p><label for="add_friend_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add_text_label'];?>
</label>
      <textarea id="add_friend_text" rows="3" class="span12"></textarea></p>
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add_submit'];?>
</button>
    </form>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
<?php }else{ ?>
<li id="add_friend_item"><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'link');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }?><?php }} ?>