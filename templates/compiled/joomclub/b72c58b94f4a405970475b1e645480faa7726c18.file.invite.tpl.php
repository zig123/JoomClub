<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:31:27
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionSettings/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1604004812505bed9fbea294-71256803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72c58b94f4a405970475b1e645480faa7726c18' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionSettings/invite.tpl',
      1 => 1347100674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1604004812505bed9fbea294-71256803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oUserCurrent' => 0,
    'iCountInviteAvailable' => 0,
    'iCountInviteUsed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bed9fcbb046_12104656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bed9fcbb046_12104656')) {function content_505bed9fcbb046_12104656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('menu.settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<small class="note note-header input-width-400"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_notice'];?>
 "<?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_submit'];?>
"</small>

<?php echo smarty_function_hook(array('run'=>'settings_invite_begin'),$_smarty_tpl);?>


<div class="wrapper-content">
	<form action="" method="POST" enctype="multipart/form-data">
		<?php echo smarty_function_hook(array('run'=>'form_settings_invite_begin'),$_smarty_tpl);?>

		<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

		<p>
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_available'];?>
: <strong><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_many'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['iCountInviteAvailable']->value;?>
<?php }?></strong><br />
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_used'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['iCountInviteUsed']->value;?>
</strong>
		</p>

		<p><label for="invite_mail"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_mail'];?>
:</label>
		<input type="text" name="invite_mail" id="invite_mail" class="input-text input-width-200" /><br />
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_mail_notice'];?>
</small></p>

		<?php echo smarty_function_hook(array('run'=>'form_settings_invite_end'),$_smarty_tpl);?>


		<button type="submit"  name="submit_invite" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_invite_submit'];?>
</button>
	</form>
</div>

<?php echo smarty_function_hook(array('run'=>'settings_invite_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>