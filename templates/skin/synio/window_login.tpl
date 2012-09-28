{if !$oUserCurrent}
<div class="modal fade" id="usrlogin" data-target="#usrlogin">
  <div class="modal-header">
    <h3>Войти</h3>
  </div>
  <div class="modal-body">


			<ul class="nav nav-tabs" id="usrloginTab">
				<li class="active"><a href="#loginsubmit" data-toggle="tab">{$aLang.user_login_submit}</a></li>
				<li><a href="#passwordreminder" data-toggle="tab">{$aLang.password_reminder}</a></li>
			</ul>

            <div class="tab-content">
			  <div class="tab-pane active" id="loginsubmit">
				{hook run='login_popup_begin'}
				<form action="{router page='login'}" method="post" id="popup-login-form">
					{hook run='form_login_popup_begin'}

					<p><input type="text" name="login" id="popup-login" placeholder="{$aLang.user_login}" class="input-text input-width-full span3"></p>

					<p><input type="password" name="password" id="popup-password" placeholder="{$aLang.user_password}" class="input-text input-width-300 span3">
					<button type="submit"  name="submit_login" class="button button-primary btn btn-primary" id="popup-login-form-submit">{$aLang.user_login_submit}</button></p>

					<label class="remember-label"><input type="checkbox" name="remember" class="input-checkbox" checked /> {$aLang.user_login_remember}</label>

					<small class="validate-error-hide validate-error-login"></small>
					{hook run='form_login_popup_end'}

					<input type="hidden" name="return-path" value="{$PATH_WEB_CURRENT|escape:'html'}">
				</form>
				{hook run='login_popup_end'}
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
				<form action="{router page='login'}reminder/" method="POST" id="popup-reminder-form">
					<p>
					<input type="text" name="mail" placeholder="{$aLang.password_reminder_email}" id="popup-reminder-mail" class="input-text input-width-300" />
					<small class="validate-error-hide validate-error-reminder"></small></p>

					<button type="submit" name="submit_reminder" class="button button-primary btn btn-primary" id="popup-reminder-form-submit" disabled="disabled">{$aLang.password_reminder_submit}</button>
				</form>
			  </div>
            </div>
  </div>
  <div class="modal-footer">
    <a class="btn btn-primary" href="{router page='registration'}">{$aLang.registration}</a>
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
{/if}