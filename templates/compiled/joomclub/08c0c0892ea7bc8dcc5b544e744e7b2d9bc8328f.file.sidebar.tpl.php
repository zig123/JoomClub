<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1861410981505be4d1b9d905-21528875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c0c0892ea7bc8dcc5b544e744e7b2d9bc8328f' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/sidebar.tpl',
      1 => 1347651608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861410981505be4d1b9d905-21528875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d1bb0609_53400279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1bb0609_53400279')) {function content_505be4d1bb0609_53400279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><aside class="span3">
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

</aside><?php }} ?>