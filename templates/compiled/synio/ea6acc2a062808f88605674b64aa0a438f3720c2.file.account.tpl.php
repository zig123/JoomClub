<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:47:28
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionSettings/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198735040750498a703d69f4-65581277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea6acc2a062808f88605674b64aa0a438f3720c2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionSettings/account.tpl',
      1 => 1345033363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198735040750498a703d69f4-65581277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498a704be0f3_76213881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498a704be0f3_76213881')) {function content_50498a704be0f3_76213881($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('menu.settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'settings_account_begin'),$_smarty_tpl);?>


<form method="post" enctype="multipart/form-data" class="wrapper-content">
	<?php echo smarty_function_hook(array('run'=>'form_settings_account_begin'),$_smarty_tpl);?>


	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
">
	
	
	<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_account'];?>
</h3>
		
	<dl class="form-item">
		<dt><label for="mail"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_mail'];?>
:</label></dt>
		<dd>	
			<input type="email" name="mail" id="mail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserCurrent']->value->getMail(), ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-300" required />
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_mail_notice'];?>
</small>
		</dd>
	</dl>
	
	<br />
	<br />
		
	<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_account_password'];?>
</h3>
		
	<small class="note note-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_account_password_notice'];?>
</small>
		
	<dl class="form-item">
		<dt><label for="password_now"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_password_current'];?>
:</label></dt>
		<dd><input type="password" name="password_now" id="password_now" value="" class="input-text input-width-200" /></dd>
	</dl>
	
	<dl class="form-item">
		<dt><label for="password"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_password_new'];?>
:</label></dt>
		<dd><input type="password" id="password" name="password" value="" class="input-text input-width-200" /></dd>
	</dl>
	
	<dl class="form-item">
		<dt><label for="password_confirm"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_password_confirm'];?>
:</label></dt>
		<dd><input type="password" id="password_confirm" name="password_confirm" value="" class="input-text input-width-200" /></dd>
	</dl>
	
	<?php echo smarty_function_hook(array('run'=>'form_settings_account_end'),$_smarty_tpl);?>

	
	
	<button type="submit"  name="submit_account_edit" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_submit'];?>
</button>
</form>

<?php echo smarty_function_hook(array('run'=>'settings_account_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>