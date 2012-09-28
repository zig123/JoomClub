<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:21:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11582698225048e9ac067698-94271771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e44214803e4089d74047500b5c9fbd5afcc2fd1' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/sidebar.tpl',
      1 => 1346081999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11582698225048e9ac067698-94271771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e9ac0dd0b5_83920301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e9ac0dd0b5_83920301')) {function content_5048e9ac0dd0b5_83920301($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><div class="span3">
	<div class="search">
		<form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text input-medium" style="margin-bottom: 0px">
			<input type="submit" value="Найти" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit btn btn-primary">
		</form>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</div><?php }} ?>