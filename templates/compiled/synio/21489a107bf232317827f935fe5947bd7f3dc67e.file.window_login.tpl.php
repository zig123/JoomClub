<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:18:35
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/window_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8248241055048e8fb8a52c3-99579065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21489a107bf232317827f935fe5947bd7f3dc67e' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/window_login.tpl',
      1 => 1345969640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8248241055048e8fb8a52c3-99579065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'PATH_WEB_CURRENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e8fb92e691_73952251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fb92e691_73952251')) {function content_5048e8fb92e691_73952251($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
<div class="modal fade" id="usrlogin" data-target="#usrlogin">
  <div class="modal-header">
    <h3>Войти</h3>
  </div>
  <div class="modal-body">


			<ul class="nav nav-tabs" id="usrloginTab">
				<li class="active"><a href="#loginsubmit" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<li><a href="#passwordreminder" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder'];?>
</a></li>
			</ul>

            <div class="tab-content">
			  <div class="tab-pane active" id="loginsubmit">
				<?php echo smarty_function_hook(array('run'=>'login_popup_begin'),$_smarty_tpl);?>

				<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" method="post" id="popup-login-form">
					<?php echo smarty_function_hook(array('run'=>'form_login_popup_begin'),$_smarty_tpl);?>


					<p><input type="text" name="login" id="popup-login" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login'];?>
" class="input-text input-width-full span3"></p>

					<p><input type="password" name="password" id="popup-password" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_password'];?>
" class="input-text input-width-300 span3">
					<button type="submit"  name="submit_login" class="button button-primary btn btn-primary" id="popup-login-form-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</button></p>

					<label class="remember-label"><input type="checkbox" name="remember" class="input-checkbox" checked /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_remember'];?>
</label>

					<small class="validate-error-hide validate-error-login"></small>
					<?php echo smarty_function_hook(array('run'=>'form_login_popup_end'),$_smarty_tpl);?>


					<input type="hidden" name="return-path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				</form>
				<?php echo smarty_function_hook(array('run'=>'login_popup_end'),$_smarty_tpl);?>

			  </div>


			  <div class="tab-pane" id="passwordreminder">
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#popup-reminder-form').bind('submit',function(){
							ls.user.reminder('popup-reminder-form');
							return false;
						});
						$('#popup-reminder-form-submit').attr('disabled',false);
					});
				</script>
				<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/" method="POST" id="popup-reminder-form">
					<p>
					<input type="text" name="mail" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_email'];?>
" id="popup-reminder-mail" class="input-text input-width-300" />
					<small class="validate-error-hide validate-error-reminder"></small></p>

					<button type="submit" name="submit_reminder" class="button button-primary btn btn-primary" id="popup-reminder-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_submit'];?>
</button>
				</form>
			  </div>
            </div>
  </div>
  <div class="modal-footer">
    <a class="btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration'];?>
</a>
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
<?php }?><?php }} ?>