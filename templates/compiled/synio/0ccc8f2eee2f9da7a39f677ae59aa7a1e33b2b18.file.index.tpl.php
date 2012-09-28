<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:41:43
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionRegistration/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124673032150498917eb1db2-89702774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ccc8f2eee2f9da7a39f677ae59aa7a1e33b2b18' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionRegistration/index.tpl',
      1 => 1345033362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124673032150498917eb1db2-89702774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    '_aRequest' => 0,
    '_sPhpSessionName' => 0,
    '_sPhpSessionId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498918119631_56839556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498918119631_56839556')) {function content_50498918119631_56839556($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_block_hookb')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#registration-form').find('input.js-ajax-validate').blur(function(e){
			var aParams={ };
			if ($(e.target).attr('name')=='password_confirm') {
				aParams['password']=$('#registration-user-password').val();
			}
			if ($(e.target).attr('name')=='password') {
				aParams['password']=$('#registration-user-password').val();
				if ($('#registration-user-password-confirm').val()) {
					ls.user.validateRegistrationField('password_confirm',$('#registration-user-password-confirm').val(),$('#registration-form'),{ 'password': $(e.target).val() });
				}
			}
			ls.user.validateRegistrationField($(e.target).attr('name'),$(e.target).val(),$('#registration-form'),aParams);
		});
		$('#registration-form').bind('submit',function(){
			ls.user.registration('registration-form');
			return false;
		});
		$('#registration-form-submit').attr('disabled',false);
	});
</script>

<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration'];?>
</h2>

<?php echo smarty_function_hook(array('run'=>'registration_begin'),$_smarty_tpl);?>


<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" method="post" id="registration-form" class="registration-form">
	<div class="wrapper-content">
		<?php echo smarty_function_hook(array('run'=>'form_registration_begin'),$_smarty_tpl);?>

		
		<dl class="form-item">
			<dt><label for="registration-login"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_login'];?>
:</label></dt>
			<dd>
				<input type="text" name="login" id="registration-login" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['login'];?>
" class="input-text input-width-250 js-ajax-validate" />
				<small class="validate-error-hide validate-error-field-login"></small>
				
				<div class="form-item-help form-item-help-login">
					<i class="icon-ok-green validate-ok-field-login" style="display: none"></i>
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_login_notice'];?>
"></i>
				</div>
			</dd>
		</dl>
		
		<dl class="form-item">
			<dt><label for="registration-mail"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_mail'];?>
:</label></dt>
			<dd>
				<input type="text" name="mail" id="registration-mail" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['mail'];?>
" class="input-text input-width-250 js-ajax-validate" />
				<small class="validate-error-hide validate-error-field-mail"></small>
				
				<div class="form-item-help form-item-help-mail">
					<i class="icon-ok-green validate-ok-field-mail" style="display: none"></i>
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_mail_notice'];?>
"></i>
				</div>
			</dd>
		</dl>
		
		<dl class="form-item">
			<dt><label for="registration-user-password"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password'];?>
:</label></dt>
			<dd>
				<input type="password" name="password" id="registration-user-password" value="" class="input-text input-width-250 js-ajax-validate" />
				<small class="validate-error-hide validate-error-field-password"></small>
				
				<div class="form-item-help form-item-help-password">
					<i class="icon-ok-green validate-ok-field-password" style="display: none"></i>
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password_notice'];?>
"></i>
				</div>
			</dd>
		</dl>

		<dl class="form-item">
			<dt><label for="registration-user-password-confirm"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password_retry'];?>
:</label></dt>
			<dd>
				<input type="password" value="" id="registration-user-password-confirm" name="password_confirm" class="input-text input-width-250 js-ajax-validate" />
				<small class="validate-error-hide validate-error-field-password_confirm"></small>
				
				<div class="form-item-help form-item-help-password_confirm">
					<i class="icon-ok-green validate-ok-field-password_confirm" style="display: none"></i>
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password_notice'];?>
"></i>
				</div>
			</dd>
		</dl>
	</div>
	
	<div class="wrapper-content wrapper-content-dark">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"registration_captcha")); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"registration_captcha"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<dl class="form-item">
			<dt><label for="registration-user-captcha"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_captcha'];?>
:</label></dt>
			<dd>
				<img src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
" 
					 onclick="this.src='<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
&n='+Math.random();" 
					 class="captcha-image" />
				<input type="text" name="captcha" id="registration-user-captcha" value="" maxlength="3" class="input-text input-width-100 js-ajax-validate" style="width: 165px" />
				<small class="validate-error-hide validate-error-field-captcha"></small>
				
				<div class="form-item-help form-item-help-captcha">
					<i class="icon-ok-green validate-ok-field-captcha" style="display: none"></i>
				</div>
			</dd>
		</dl>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"registration_captcha"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
		<?php echo smarty_function_hook(array('run'=>'form_registration_end'),$_smarty_tpl);?>

	</div>
	
	
	<div class="wrapper-content">
		<dl class="form-item">
			<dt></dt>
			<dd>
				<button type="submit" name="submit_register" class="button button-primary" id="registration-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</button>
			</dd>
		</dl>
		
	</div>
</form>

<?php echo smarty_function_hook(array('run'=>'registration_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>