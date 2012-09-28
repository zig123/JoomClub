<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 12:51:56
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/speakers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:544850234505d7c2c059ee8-31066103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d27dcf01c542235e919db4854cd56ecc16ae78c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/speakers.tpl',
      1 => 1347100677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544850234505d7c2c059ee8-31066103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oTalk' => 0,
    'oTalkUser' => 0,
    'TALK_USER_ACTIVE' => 0,
    'oUserRecipient' => 0,
    'oUserCurrent' => 0,
    'TALK_USER_DELETE_BY_AUTHOR' => 0,
    'oUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d7c2c12af66_71254589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d7c2c12af66_71254589')) {function content_505d7c2c12af66_71254589($_smarty_tpl) {?><div class="talk-search talk-recipients">
	<header class="talk-recipients-header">
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_speaker_title'];?>
:

		<?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalkUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTalk']->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTalkUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oTalkUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
$_smarty_tpl->tpl_vars['oTalkUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oTalkUser']->iteration++;
 $_smarty_tpl->tpl_vars['oTalkUser']->last = $_smarty_tpl->tpl_vars['oTalkUser']->iteration === $_smarty_tpl->tpl_vars['oTalkUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users']['last'] = $_smarty_tpl->tpl_vars['oTalkUser']->last;
?>
			<?php $_smarty_tpl->tpl_vars["oUserRecipient"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalkUser']->value->getUser(), null, 0);?>
			<a class="username <?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()!=$_smarty_tpl->tpl_vars['TALK_USER_ACTIVE']->value){?>inactive<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['oUserRecipient']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserRecipient']->value->getLogin();?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['users']['last']){?>, <?php }?>
		<?php } ?>

		<?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
			&nbsp;&nbsp;&nbsp;<a href="#" class="link-dotted" onclick="ls.talk.toggleSearchForm(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_speaker_edit'];?>
</a>
		<?php }?>
	</header>

	<?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
		<div class="talk-search-content talk-recipients-content" id="talk_recipients">
			<form onsubmit="return ls.talk.addToTalk(<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
);">
				<p><input type="text" id="talk_speaker_add" name="add" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_speaker_add_label'];?>
" class="input-text input-width-300 autocomplete-users-sep" /></p>
				<input type="hidden" id="talk_id" value="<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
" />
			</form>

			<div id="speaker_list_block">
			<?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getTalkUsers()){?>
				<ul class="list" id="speaker_list">
					<?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalkUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTalk']->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTalkUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oTalkUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
$_smarty_tpl->tpl_vars['oTalkUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oTalkUser']->iteration++;
 $_smarty_tpl->tpl_vars['oTalkUser']->last = $_smarty_tpl->tpl_vars['oTalkUser']->iteration === $_smarty_tpl->tpl_vars['oTalkUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users']['last'] = $_smarty_tpl->tpl_vars['oTalkUser']->last;
?>
						<?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
							<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalkUser']->value->getUser(), null, 0);?>

							<?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()!=$_smarty_tpl->tpl_vars['TALK_USER_DELETE_BY_AUTHOR']->value){?>
								<li id="speaker_item_<?php echo $_smarty_tpl->tpl_vars['oTalkUser']->value->getUserId();?>
_area">
									<a class="user <?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()!=$_smarty_tpl->tpl_vars['TALK_USER_ACTIVE']->value){?>inactive<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
									<?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()==$_smarty_tpl->tpl_vars['TALK_USER_ACTIVE']->value){?>- <a href="#" id="speaker_item_<?php echo $_smarty_tpl->tpl_vars['oTalkUser']->value->getUserId();?>
" class="delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a><?php }?>
								</li>
							<?php }?>
						<?php }?>
					<?php } ?>
				</ul>
			<?php }?>
			</div>
		</div>
	<?php }?>
</div><?php }} ?>