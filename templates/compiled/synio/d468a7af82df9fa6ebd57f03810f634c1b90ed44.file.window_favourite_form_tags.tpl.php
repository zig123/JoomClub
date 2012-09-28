<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:20:36
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/window_favourite_form_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20600589925048e9748e2200-75055546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd468a7af82df9fa6ebd57f03810f634c1b90ed44' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/window_favourite_form_tags.tpl',
      1 => 1345062601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20600589925048e9748e2200-75055546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e97494bae7_06753985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e97494bae7_06753985')) {function content_5048e97494bae7_06753985($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
<div class="modal fade" id="addfavouritetags" data-target="#addfavouritetags">
  <div class="modal-header">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add_favourite_tags'];?>
</h3>
  </div>
  <div class="modal-body">
		<form onsubmit="return ls.favourite.saveTags(this);" class="modal-content">
			<input type="hidden" name="target_type" value="" id="favourite-form-tags-target-type">
			<input type="hidden" name="target_id" value="" id="favourite-form-tags-target-id">

			<p><input type="text" name="tags" value="" id="favourite-form-tags-tags" class="autocomplete-tags-sep input-text input-width-full"></p>
			<button type="submit"  name="" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_save'];?>
</button>
			<button type="submit"  name="" class="button jqmClose" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_cancel'];?>
</button>
		</form>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
<?php }?><?php }} ?>