<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 05:17:54
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionBlogs/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66059147750494b42382a61-56164415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2cdf000d1bdfc52cfbab24a08de92d3f267461' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionBlogs/index.tpl',
      1 => 1345033355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66059147750494b42382a61-56164415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sBlogsRootPage' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50494b42418884_65609863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50494b42418884_65609863')) {function content_50494b42418884_65609863($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sMenuHeadItemSelect'=>"blogs"), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</h2>

<form action="" method="POST" id="form-blogs-search" onsubmit="return false;" class="search-item">
	<div class="search-input-wrapper">
		<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_search_title_hint'];?>
" autocomplete="off" name="blog_title" class="input-text" value="" onkeyup="ls.timer.run(ls.blog.searchBlogs,'blogs_search',['form-blogs-search'],1000);">
		<div class="input-submit" onclick="jQuery('#form-blogs-search').submit()"></div>
	</div>
</form>

<div id="blogs-list-search" style="display:none;"></div>

<div id="blogs-list-original">
	<?php echo smarty_function_router(array('page'=>'blogs','assign'=>'sBlogsRootPage'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('blog_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bBlogsUseOrder'=>true,'sBlogsRootPage'=>$_smarty_tpl->tpl_vars['sBlogsRootPage']->value), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>