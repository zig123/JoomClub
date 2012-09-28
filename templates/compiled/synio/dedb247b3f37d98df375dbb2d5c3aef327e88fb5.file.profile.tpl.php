<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionSettings/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16338835885049873942de04-06566080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dedb247b3f37d98df375dbb2d5c3aef327e88fb5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionSettings/profile.tpl',
      1 => 1345033364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16338835885049873942de04-06566080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUserFieldsContact' => 0,
    'oFieldAll' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aGeoCountries' => 0,
    'oGeoCountry' => 0,
    'oGeoTarget' => 0,
    'aGeoRegions' => 0,
    'oGeoRegion' => 0,
    'aGeoCities' => 0,
    'oGeoCity' => 0,
    'aUserFieldValues' => 0,
    'oField' => 0,
    'aUserFieldContactValues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504987397b4bc4_02042498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504987397b4bc4_02042498')) {function content_504987397b4bc4_02042498($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang_load')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php echo $_smarty_tpl->getSubTemplate ('menu.settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
	jQuery(document).ready(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"geo_select_city,geo_select_region"),$_smarty_tpl);?>
);
		ls.geo.initSelect();
		ls.userfield.iCountMax='<?php echo smarty_function_cfg(array('name'=>"module.user.userfield_max_identical"),$_smarty_tpl);?>
';
	});
</script>

<?php echo smarty_function_hook(array('run'=>'settings_profile_begin'),$_smarty_tpl);?>


<form method="post" enctype="multipart/form-data" class="form-profile">
	<div class="wrapper-content">
		<p id="profile_user_field_template" style="display:none;" class="js-user-field-item">
			<select name="profile_user_field_type[]" onchange="ls.userfield.changeFormField(this);">
			<?php  $_smarty_tpl->tpl_vars['oFieldAll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFieldAll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldsContact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFieldAll']->key => $_smarty_tpl->tpl_vars['oFieldAll']->value){
$_smarty_tpl->tpl_vars['oFieldAll']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['oFieldAll']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oFieldAll']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php } ?>
			</select>
			<input type="text" name="profile_user_field_value[]" value="" class="input-text input-width-200">
			<a class="icon-synio-remove" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_delete'];?>
" href="#" onclick="return ls.userfield.removeFormField(this);"></a>
		</p>
		
		
		<div class="avatar-change">
			<div class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(100);?>
" id="avatar-img" /></div>

			<div>
				<a href="#" id="avatar-upload" class="link-dotted"><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatar()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_change'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_upload'];?>
<?php }?></a><br />
				<a href="#" id="avatar-remove" class="link-dotted" onclick="return ls.user.removeAvatar();" style="<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatar()){?>display:none;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_delete'];?>
</a>
			</div>
			
			<div id="avatar-resize" class="modal modal-upload-avatar">
				<header class="modal-header">
					<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_resize_title'];?>
</h3>
				</header>
				
				<div class="modal-content">
					<div class="clearfix">
						<div class="image-border">
							<img src="" alt="" id="avatar-resize-original-img">
						</div>
					</div>
					<button type="submit"  class="button button-primary" onclick="return ls.user.resizeAvatar();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_resize_apply'];?>
</button>
					<button type="submit"  class="button" onclick="return ls.user.cancelAvatar();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_avatar_resize_cancel'];?>
</button>
				</div>
			</div>
		</div>

	
		<?php echo smarty_function_hook(array('run'=>'form_settings_profile_begin'),$_smarty_tpl);?>


		<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
">
		
		
		
		<dl class="form-item">
			<dt><label for="profile_name"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_name'];?>
:</label></dt>
			<dd>
				<input type="text" name="profile_name" id="profile_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-250">
			</dd>
		</dl>
		
		<dl class="form-item">
			<dt><label for="profile_sex"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_sex'];?>
:</label></dt>
			<dd>
				<select name="profile_sex" id="profile_sex" class="input-width-250">
					<option value="man" <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileSex()=='man'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_sex_man'];?>
</option>
					<option value="woman" <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileSex()=='woman'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_sex_woman'];?>
</option>
					<option value="other" <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileSex()=='other'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_sex_other'];?>
</option>
				</select>
			</dd>
		</dl>
		
		<dl class="form-item">
			<dt><label for=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_birthday'];?>
:</label></dt>
			<dd>
				<select name="profile_birthday_day" style="width: 58px; margin-right: 4px;">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['date_day'];?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['name'] = 'date_day';
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop'] = is_array($_loop=32) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['date_day']['total']);
?>
						<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['date_day']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['date_day']['index']==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileBirthday(),"%d")){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['date_day']['index'];?>
</option>
					<?php endfor; endif; ?>
				</select>
				
				<select name="profile_birthday_month" style="width: 103px; margin-right: 4px;">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['date_month'];?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['name'] = 'date_month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['date_month']['total']);
?>
						<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['date_month']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['date_month']['index']==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileBirthday(),"%m")){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['month_array'][$_smarty_tpl->getVariable('smarty')->value['section']['date_month']['index']][0];?>
</option>
					<?php endfor; endif; ?>
				</select>
				
				<select name="profile_birthday_year" style="width: 72px">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['date_year'];?>
</option>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['name'] = 'date_year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['loop'] = is_array($_loop=smarty_modifier_date_format(time(),"%Y")+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['max'] = (int)smarty_modifier_date_format(time(),"%Y")-2012+130;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['date_year']['total']);
?>
						<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['date_year']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['date_year']['index']==smarty_modifier_date_format($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileBirthday(),"%Y")){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['date_year']['index'];?>
</option>
					<?php endfor; endif; ?>
				</select>
			</dd>
		</dl>
		
		
		<br />
		<label for="profile_about" style="margin-bottom: 7px"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_about'];?>
:</label>
		<textarea name="profile_about" id="profile_about" class="input-text input-width-full" rows="7"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAbout(), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
		<br />
		<br />
		<br />

		<div class="js-geo-select">
		<label for="" style="margin-bottom: 7px"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_place'];?>
:</label>
		<p style="margin-bottom: 15px">
			<select class="js-geo-country input-width-200" name="geo_country">
				<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['geo_select_country'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aGeoCountries']->value){?>
					<?php  $_smarty_tpl->tpl_vars['oGeoCountry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGeoCountry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGeoCountries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGeoCountry']->key => $_smarty_tpl->tpl_vars['oGeoCountry']->value){
$_smarty_tpl->tpl_vars['oGeoCountry']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['oGeoCountry']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value&&$_smarty_tpl->tpl_vars['oGeoTarget']->value->getCountryId()==$_smarty_tpl->tpl_vars['oGeoCountry']->value->getId()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oGeoCountry']->value->getName();?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</p>

		<p style="margin-bottom: 15px">
			<select class="js-geo-region input-width-200" name="geo_region" <?php if (!$_smarty_tpl->tpl_vars['oGeoTarget']->value||!$_smarty_tpl->tpl_vars['oGeoTarget']->value->getCountryId()){?>style="display:none;"<?php }?>>
				<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['geo_select_region'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aGeoRegions']->value){?>
					<?php  $_smarty_tpl->tpl_vars['oGeoRegion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGeoRegion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGeoRegions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGeoRegion']->key => $_smarty_tpl->tpl_vars['oGeoRegion']->value){
$_smarty_tpl->tpl_vars['oGeoRegion']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['oGeoRegion']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value&&$_smarty_tpl->tpl_vars['oGeoTarget']->value->getRegionId()==$_smarty_tpl->tpl_vars['oGeoRegion']->value->getId()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oGeoRegion']->value->getName();?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</p>

		<p style="margin-bottom: 15px">
			<select class="js-geo-city input-width-200" name="geo_city" <?php if (!$_smarty_tpl->tpl_vars['oGeoTarget']->value||!$_smarty_tpl->tpl_vars['oGeoTarget']->value->getRegionId()){?>style="display:none;"<?php }?>>
				<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['geo_select_city'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aGeoCities']->value){?>
					<?php  $_smarty_tpl->tpl_vars['oGeoCity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oGeoCity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aGeoCities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oGeoCity']->key => $_smarty_tpl->tpl_vars['oGeoCity']->value){
$_smarty_tpl->tpl_vars['oGeoCity']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['oGeoCity']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value&&$_smarty_tpl->tpl_vars['oGeoTarget']->value->getCityId()==$_smarty_tpl->tpl_vars['oGeoCity']->value->getId()){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oGeoCity']->value->getName();?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</p>
		</div>
		
		<?php $_smarty_tpl->tpl_vars["aUserFieldValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserFieldValues(false,''), null, 0);?>
		<?php if (count($_smarty_tpl->tpl_vars['aUserFieldValues']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
				<dl class="form-item">
					<dt><label for="profile_user_field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
:</label></dt>
					<dd><input type="text" class="input-text input-width-300" name="profile_user_field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
" id="profile_user_field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getValue(), ENT_QUOTES, 'UTF-8', true);?>
"/></dd>
				</dl>
			<?php } ?>
		<?php }?>
	</div>
		
		
		
	<div class="wrapper-content wrapper-content-dark">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_section_contacts'];?>
</h3>

		<?php $_smarty_tpl->tpl_vars["aUserFieldContactValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserFieldValues(true,array('contact','social')), null, 0);?>
		<div id="user-field-contact-contener">
		<?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldContactValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
			<p class="js-user-field-item">
				<select name="profile_user_field_type[]" onchange="ls.userfield.changeFormField(this);">
				<?php  $_smarty_tpl->tpl_vars['oFieldAll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFieldAll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldsContact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFieldAll']->key => $_smarty_tpl->tpl_vars['oFieldAll']->value){
$_smarty_tpl->tpl_vars['oFieldAll']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['oFieldAll']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oFieldAll']->value->getId()==$_smarty_tpl->tpl_vars['oField']->value->getId()){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oFieldAll']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php } ?>
				</select>
				<input type="text" name="profile_user_field_value[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getValue(), ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-200">
				<a class="icon-synio-remove" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_delete'];?>
" href="#" onclick="return ls.userfield.removeFormField(this);"></a>
			</p>
		<?php } ?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['aUserFieldsContact']->value){?>
			<a href="#" onclick="return ls.userfield.addFormField();" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_add'];?>
</a>
		<?php }?>
	</div>

	
	<div class="wrapper-content">
		<script type="text/javascript">
			jQuery(function($){
				$('#avatar-upload').file({ name:'avatar' }).choose(function(e, input) {
					ls.user.uploadAvatar(null,input);
				});
			});
		</script>

		
		<?php echo smarty_function_hook(array('run'=>'form_settings_profile_end'),$_smarty_tpl);?>

		
		
		<button type="submit"  name="submit_profile_edit" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_submit'];?>
</button>
	</div>
</form>



<?php echo smarty_function_hook(array('run'=>'settings_profile_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>