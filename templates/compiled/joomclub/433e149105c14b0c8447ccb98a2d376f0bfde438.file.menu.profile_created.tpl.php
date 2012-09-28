<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:26:24
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_created.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1066799590505bec702aa0a0-69669594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433e149105c14b0c8447ccb98a2d376f0bfde438' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_created.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066799590505bec702aa0a0-69669594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuSubItemSelect' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
    'iCountTopicUser' => 0,
    'iCountCommentUser' => 0,
    'oUserCurrent' => 0,
    'iCountNoteUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec7038a789_84477098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec7038a789_84477098')) {function content_505bec7038a789_84477098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-pills nav-pills-profile">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='topics'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
created/topics/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountTopicUser']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountTopicUser']->value;?>
) <?php }?></a>
	</li>
	
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='comments'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
created/comments/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_publication_comment'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountCommentUser']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountCommentUser']->value;?>
) <?php }?></a>
	</li>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='notes'){?>class="active"<?php }?>>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
created/notes/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_notes'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountNoteUser']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountNoteUser']->value;?>
) <?php }?></a>
		</li>
	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'menu_profile_created_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_profile_created','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

<?php }} ?>