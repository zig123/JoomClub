<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:56:09
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:622483361505be559cefbd2-61121999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d356a5f4115d3a4ddd8edeca640c33bd9d344f8' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/add.tpl',
      1 => 1347809332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622483361505be559cefbd2-61121999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    '_aRequest' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be559d7cd30_41863431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be559d7cd30_41863431')) {function content_505be559d7cd30_41863431($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('menu.talk.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionTalk/friends.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'talk_add_begin'),$_smarty_tpl);?>


<div class="topic" style="display: none;">
	<div class="content" id="text_preview"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sImgToLoad'=>'talk_text','sSettingsTinymce'=>'ls.settings.getTinymceComment()','sSettingsMarkitup'=>'ls.settings.getMarkitupComment()'), 0);?>


<form action="" method="POST" enctype="multipart/form-data">
	<?php echo smarty_function_hook(array('run'=>'form_add_talk_begin'),$_smarty_tpl);?>

	
	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

	<p><label for="talk_users"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_create_users'];?>
:</label>
	<input type="text" class="input-text input-width-full autocomplete-users-sep" id="talk_users" name="talk_users" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['talk_users'];?>
" /></p>

	<p><label for="talk_title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_create_title'];?>
:</label>
	<input type="text" class="input-text input-width-full" id="talk_title" name="talk_title" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['talk_title'];?>
" /></p>

	<p><label for="talk_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_create_text'];?>
:</label>
	<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<textarea name="talk_text" id="talk_text" rows="12" class="input-text input-width-full mce-editor markitup-editor input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['talk_text'];?>
</textarea>
	<?php }else{ ?>
	<textarea name="talk_text" id="redactor" rows="12" class="input-text input-width-full input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['talk_text'];?>
</textarea>
	<?php }?>	
	</p>
	
	<?php echo smarty_function_hook(array('run'=>'form_add_talk_end'),$_smarty_tpl);?>

	
	<button type="submit"  class="button button-primary" name="submit_talk_add"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_create_submit'];?>
</button>
	<button type="submit"  class="button" name="submit_preview" onclick="jQuery('#text_preview').parent().show(); ls.tools.textPreview('talk_text',false); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_preview'];?>
</button>		
</form>

<?php echo smarty_function_hook(array('run'=>'talk_add_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>