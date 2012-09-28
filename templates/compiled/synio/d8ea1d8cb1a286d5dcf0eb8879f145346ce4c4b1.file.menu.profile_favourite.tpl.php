<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 09:22:51
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.profile_favourite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:522472070504ad62b1d8af6-71369471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ea1d8cb1a286d5dcf0eb8879f145346ce4c4b1' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.profile_favourite.tpl',
      1 => 1345033312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '522472070504ad62b1d8af6-71369471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuSubItemSelect' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
    'iCountTopicFavourite' => 0,
    'iCountCommentFavourite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504ad62b22b673_27950755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504ad62b22b673_27950755')) {function content_504ad62b22b673_27950755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-pills nav-pills-profile">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='topics'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
favourites/topics/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites_topics'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountTopicFavourite']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountTopicFavourite']->value;?>
) <?php }?></a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='comments'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
favourites/comments/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites_comments'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountCommentFavourite']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountCommentFavourite']->value;?>
) <?php }?></a>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_profile_favourite_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_profile_favourite','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

<?php }} ?>