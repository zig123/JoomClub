<?php /* Smarty version Smarty-3.1.8, created on 2012-09-28 00:24:28
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionBlog/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15291907745064b5fc1ac243-64925161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b61ebd038384c8fb29a1281ca5f57d2b90428c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionBlog/add.tpl',
      1 => 1347809717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15291907745064b5fc1ac243-64925161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sEvent' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    '_aRequest' => 0,
    'oUserCurrent' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5064b5fc401a40_80568349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5064b5fc401a40_80568349')) {function content_5064b5fc401a40_80568349($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang_load')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='add'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu_content'=>'create'), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('menu.blog_edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sImgToLoad'=>'blog_description','sSettingsTinymce'=>'ls.settings.getTinymceComment()','sSettingsMarkitup'=>'ls.settings.getMarkitupComment()'), 0);?>

	
<script type="text/javascript">
	jQuery(document).ready(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog_create_type_open_notice,blog_create_type_close_notice"),$_smarty_tpl);?>
);
		ls.blog.loadInfoType($('#blog_type').val());
	});
</script>


<form method="post" enctype="multipart/form-data" class="wrapper-content">
	<?php echo smarty_function_hook(array('run'=>'form_add_blog_begin'),$_smarty_tpl);?>

	
	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

	<p><label for="blog_title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_title'];?>
:</label>
	<input type="text" id="blog_title" name="blog_title" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['blog_title'];?>
" class="span12" />
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_title_notice'];?>
</small></p>

	
	<p><label for="blog_url"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_url'];?>
:</label>
	<input type="text" id="blog_url" name="blog_url" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['blog_url'];?>
" class="span12" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['blog_id']&&!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>disabled<?php }?> />
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_url_notice'];?>
</small></p>
	

	<p><label for="blog_type"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_type'];?>
:</label>
	<select name="blog_type" id="blog_type" class="input-width-200" onChange="ls.blog.loadInfoType(jQuery(this).val());">
		<option value="open" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['blog_type']=='open'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_type_open'];?>
</option>
		<option value="close" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['blog_type']=='close'){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_type_close'];?>
</option>
	</select>
	<small class="note" id="blog_type_note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_type_open_notice'];?>
</small></p>

	<p><label for="blog_limit_rating_topic"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_rating'];?>
<br /><small class="note">(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_rating_notice'];?>
)</small>:</label>
	<input type="text" id="blog_limit_rating_topic" name="blog_limit_rating_topic" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['blog_limit_rating_topic'];?>
" class="input-text input-width-100" />
	</p>

	<p><label for="blog_description"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_description'];?>
:</label>
	<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<textarea name="blog_description" id="blog_description" rows="15" class="input-text input-width-full mce-editor markitup-editor input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['blog_description'];?>
</textarea>
	<?php }else{ ?>
	<textarea name="blog_description" id="redactor" rows="15" class="input-text input-width-full input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['blog_description'];?>
</textarea>
	<?php }?>
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_description_notice'];?>
</small></p>

	<?php echo smarty_function_hook(array('run'=>'form_add_blog_end'),$_smarty_tpl);?>


	<button type="submit"  name="submit_blog_add" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_create_submit'];?>
</button>
</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>