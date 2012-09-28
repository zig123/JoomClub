<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 06:34:52
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionQuestion/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308720745505e754c8191e1-33197465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b69d1bc38eb3c72754829fde84a6ff221d89ede' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionQuestion/add.tpl',
      1 => 1347809530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308720745505e754c8191e1-33197465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sEvent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aBlogsAllow' => 0,
    'oBlog' => 0,
    '_aRequest' => 0,
    'bEditDisabled' => 0,
    'sAnswer' => 0,
    'i' => 0,
    'oConfig' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505e754c950292_09274431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505e754c950292_09274431')) {function content_505e754c950292_09274431($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='add'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu_content'=>'create'), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_edit'];?>
</h2>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'add_topic_question_begin'),$_smarty_tpl);?>



<form action="" method="POST" enctype="multipart/form-data" id="form-topic-add" class="wrapper-content">
	<?php echo smarty_function_hook(array('run'=>'form_add_topic_question_begin'),$_smarty_tpl);?>

	
	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

	<p><label for="blog_id"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_blog'];?>
</label>
	<select name="blog_id" id="blog_id" onChange="ls.blog.loadInfo(jQuery(this).val());" class="input-width-full">
		<option value="0"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_blog_personal'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogsAllow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['blog_id']==$_smarty_tpl->tpl_vars['oBlog']->value->getId()){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
		<?php } ?>
	</select>
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_blog_notice'];?>
</small></p>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			ls.blog.loadInfo($('#blog_id').val());
		});
    </script>
	
	
	<p><label for="topic_title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_create_title'];?>
:</label>
	<input type="text" id="topic_title" name="topic_title" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_title'];?>
" class="input-text input-width-full" <?php if ($_smarty_tpl->tpl_vars['bEditDisabled']->value){?>readonly="readonly"<?php }?> /><br />
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_create_title_notice'];?>
</small></p>

	
	<div class="poll-create">
		<label><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_create_answers'];?>
:</label>
		<ul class="question-list" id="question_list">
			<?php if (count($_smarty_tpl->tpl_vars['_aRequest']->value['answer'])>=2){?>
				<?php  $_smarty_tpl->tpl_vars['sAnswer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sAnswer']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_aRequest']->value['answer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sAnswer']->key => $_smarty_tpl->tpl_vars['sAnswer']->value){
$_smarty_tpl->tpl_vars['sAnswer']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['sAnswer']->key;
?>
					<li>
						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sAnswer']->value;?>
" name="answer[]" class="input-text input-width-300" <?php if ($_smarty_tpl->tpl_vars['bEditDisabled']->value){?>disabled<?php }?> />
						<?php if (!$_smarty_tpl->tpl_vars['bEditDisabled']->value&&$_smarty_tpl->tpl_vars['i']->value>1){?> <a href="#" class="icon-synio-remove" onClick="return ls.poll.removeAnswer(this);"></a><?php }?>
					</li>
				<?php } ?>
			<?php }else{ ?>
				<li><input type="text" value="" name="answer[]" class="input-text input-width-300" <?php if ($_smarty_tpl->tpl_vars['bEditDisabled']->value){?>disabled<?php }?> /></li>
				<li><input type="text" value="" name="answer[]" class="input-text input-width-300" <?php if ($_smarty_tpl->tpl_vars['bEditDisabled']->value){?>disabled<?php }?> /></li>
			<?php }?>
		</ul>
	
		<?php if (!$_smarty_tpl->tpl_vars['bEditDisabled']->value){?>
			<a href="#" onClick="ls.poll.addAnswer(); return false;" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_create_answers_add'];?>
</a>
		<?php }?>
	</div>

	
	<p><label for="topic_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_create_text'];?>
:</label>
	<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<textarea name="topic_text" id="topic_text" rows="10" class="input-width-full mce-editor markitup-editor input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_text'];?>
</textarea>
	<?php }else{ ?>
	<textarea name="topic_text" id="redactor" rows="10" class="input-text input-width-full input-width-full"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_text'];?>
</textarea>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
		<?php echo $_smarty_tpl->getSubTemplate ('tags_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sTagsTargetId'=>"topic_text"), 0);?>

	<?php }?>
	</p>
		
	<p><label for="topic_tags"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_tags'];?>
:</label>
	<input type="text" id="topic_tags" name="topic_tags" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_tags'];?>
" class="input-text input-width-full autocomplete-tags-sep" />
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_tags_notice'];?>
</small></p>

	
	<p><label for="topic_forbid_comment">
	<input type="checkbox" id="topic_forbid_comment" name="topic_forbid_comment" class="input-checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['topic_forbid_comment']==1){?>checked<?php }?> />
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_forbid_comment'];?>
</label>
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_forbid_comment_notice'];?>
</small></p>

	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
		<p><label for="topic_publish_index">
		<input type="checkbox" id="topic_publish_index" name="topic_publish_index" class="input-checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['topic_publish_index']==1){?>checked<?php }?> />
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_publish_index'];?>
</label>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_publish_index_notice'];?>
</small></p>
	<?php }?>

	<input type="hidden" name="topic_type" value="question" />

	<?php echo smarty_function_hook(array('run'=>'form_add_topic_question_end'),$_smarty_tpl);?>


	<button type="submit"  name="submit_topic_publish" id="submit_topic_publish" class="button button-primary fl-r"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_publish'];?>
</button>
	<button type="submit"  name="submit_preview" onclick="jQuery('#text_preview').parent().show(); ls.topic.preview('form-topic-add','text_preview'); return false;" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_preview'];?>
</button>
	<button type="submit"  name="submit_topic_save" id="submit_topic_save" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_save'];?>
</button>
</form>

<div class="topic-preview" id="text_preview"></div>

<?php echo smarty_function_hook(array('run'=>'add_topic_question_end'),$_smarty_tpl);?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>