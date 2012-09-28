<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:31:17
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_favourite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097469000505bed95d3df55-49492273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1863196f797d76a24a75f2f15092fde0f73a50d4' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_favourite.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097469000505bed95d3df55-49492273',
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
  'unifunc' => 'content_505bed95e35397_60276741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bed95e35397_60276741')) {function content_505bed95e35397_60276741($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
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