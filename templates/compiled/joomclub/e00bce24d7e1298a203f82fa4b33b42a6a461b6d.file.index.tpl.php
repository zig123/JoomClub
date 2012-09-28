<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:52
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:375005074505bec14ed0c98-11441903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00bce24d7e1298a203f82fa4b33b42a6a461b6d' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/index.tpl',
      1 => 1347100666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '375005074505bec14ed0c98-11441903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aPrefixUser' => 0,
    'sPrefixUser' => 0,
    'aUsersRating' => 0,
    'sUsersRootPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec14f2d517_21922564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec14f2d517_21922564')) {function content_505bec14f2d517_21922564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</h2>

<form action="" method="POST" id="form-users-search" onsubmit="return false;" class="search-item search-item-abc">
	<div class="search-input-wrapper">
		<input id="search-user-login" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_search_title_hint'];?>
" autocomplete="off" name="user_login" value="" class="input-text" onkeyup="ls.timer.run(ls.user.searchUsers,'users_search',['form-users-search'],1000);">
		<div class="input-submit" onclick="jQuery('#form-users-search').submit()"></div>
	</div>
	
	<ul id="user-prefix-filter" class="search-abc">
		<li class="active"><a href="#" onclick="return ls.user.searchUsersByPrefix('',this);"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_search_filter_all'];?>
</span></a></li>
		<?php  $_smarty_tpl->tpl_vars['sPrefixUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPrefixUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPrefixUser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPrefixUser']->key => $_smarty_tpl->tpl_vars['sPrefixUser']->value){
$_smarty_tpl->tpl_vars['sPrefixUser']->_loop = true;
?>
			<li><a href="#" onclick="return ls.user.searchUsersByPrefix('<?php echo $_smarty_tpl->tpl_vars['sPrefixUser']->value;?>
',this);"><span><?php echo $_smarty_tpl->tpl_vars['sPrefixUser']->value;?>
</span></a></li>
		<?php } ?>
	</ul>
</form>


<div id="users-list-search" style="display:none;"></div>

<div id="users-list-original">
	<?php echo smarty_function_router(array('page'=>'people','assign'=>'sUsersRootPage'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersRating']->value,'bUsersUseOrder'=>true,'sUsersRootPage'=>$_smarty_tpl->tpl_vars['sUsersRootPage']->value), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>