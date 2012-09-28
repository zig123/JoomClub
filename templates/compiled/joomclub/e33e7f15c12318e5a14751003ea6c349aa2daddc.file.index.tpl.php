<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:48:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTag/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:872538769505bf1833074b6-97125856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33e7f15c12318e5a14751003ea6c349aa2daddc' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTag/index.tpl',
      1 => 1347100675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872538769505bf1833074b6-97125856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bf18338e905_03308187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bf18338e905_03308187')) {function content_505bf18338e905_03308187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<form action="" method="GET" class="js-tag-search-form search-tags">
	<input type="text" name="tag" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_search'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-full autocomplete-tags js-tag-search" />
</form>


<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>