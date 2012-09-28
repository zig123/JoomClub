<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 12:53:39
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/window_load_img.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951144345505d7c93c37a64-43259472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57a09df83866429969e3efe581fb6f311d0cbca' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/window_load_img.tpl',
      1 => 1347100650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951144345505d7c93c37a64-43259472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sToLoad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d7c93c76362_57230578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d7c93c76362_57230578')) {function content_505d7c93c76362_57230578($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><div class="modal fade" id="window_upload_img" data-target="#window_upload_img" class="modal modal-image-upload">
  <div class="modal-header">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg'];?>
</h3>
  </div>

	<div class="modal-body">
		<form method="POST" action="" enctype="multipart/form-data" id="block_upload_img_content_link" onsubmit="return false;" style="display: none;" class="tab-content js-block-upload-img-content" data-type="link">
			<p><label for="img_file"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_url'];?>
:</label>
			<input type="text" name="img_url" id="img_url" value="http://" class="input-text input-width-full" /></p>

			<p>
				<label for="form-image-url-align"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_align'];?>
:</label>
				<select name="align" id="form-image-url-align" class="input-width-full">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_align_no'];?>
</option>
					<option value="left"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_align_left'];?>
</option>
					<option value="right"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_align_right'];?>
</option>
					<option value="center"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_align_center'];?>
</option>
				</select>
			</p>

			<p><label for="form-image-url-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_title'];?>
:</label>
				<input type="text" name="title" id="form-image-url-title" value="" class="input-text input-width-full" /></p>

			<?php echo smarty_function_hook(array('run'=>"uploadimg_link_additional"),$_smarty_tpl);?>


			<button type="submit"  class="button button-primary" onclick="ls.topic.insertImageToEditor(jQuery('#img_url').val(),jQuery('#form-image-url-align').val(),jQuery('#form-image-url-title').val());"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_link_submit_paste'];?>
</button>
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['or'];?>

			<button type="submit"  class="button button-primary" onclick="ls.ajaxUploadImg('block_upload_img_content_link','<?php echo $_smarty_tpl->tpl_vars['sToLoad']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_link_submit_load'];?>
</button>
			<button type="submit"  class="button jqmClose"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg_cancel'];?>
</button>
		</form>
	</div>

  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
	<?php }} ?>