<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 05:18:00
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionLogin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76475459750494b483909a2-66297485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b816de566c36f6434f08f1f54a6578a83d01e43' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionLogin/index.tpl',
      1 => 1345033356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76475459750494b483909a2-66297485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50494b4848c3a8_43266762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50494b4848c3a8_43266762')) {function content_50494b4848c3a8_43266762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#login-form').bind('submit',function(){
			ls.user.login('login-form');
			return false;
		});
		$('#login-form-submit').attr('disabled',false);
	});
</script>

<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_authorization'];?>
</h2>

<?php echo smarty_function_hook(array('run'=>'login_begin'),$_smarty_tpl);?>


<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" method="POST" id="login-form">
	<?php echo smarty_function_hook(array('run'=>'form_login_begin'),$_smarty_tpl);?>


	<p><label for="login"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login'];?>
</label>
	<input type="text" id="login" name="login" class="input-text input-width-200" /></p>
	
	<p><label for="password"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_password'];?>
</label>
	<input type="password" id="password" name="password" class="input-text input-width-200" />
	<small class="validate-error-hide validate-error-login"></small></p>
	
	<p><label><input type="checkbox" name="remember" checked class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_remember'];?>
</label></p>
	
	<?php echo smarty_function_hook(array('run'=>'form_login_end'),$_smarty_tpl);?>


	<button type="submit"  name="submit_login" class="button button-primary" id="login-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</button>

		
	<br />
	<br />
	<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_registration'];?>
</a><br />
	<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_password_reminder'];?>
</a>
</form>


<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')){?>
	<br /><br />
	<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
invite/" method="POST">
		<h2><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite'];?>
</h2>

		<p><label><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_code'];?>
<br />
		<input type="text" name="invite_code" /></label></p>
		<button type="submit"  name="submit_invite" class="button button-primary" id="login-form-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_check'];?>
</button>
	</form>
<?php }?>

<?php echo smarty_function_hook(array('run'=>'login_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>