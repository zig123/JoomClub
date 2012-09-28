<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 01:05:05
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTag/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177213427350491001510870-46497994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d5761a3297bdb71b04f103711b67dc40af9320' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTag/index.tpl',
      1 => 1345033365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177213427350491001510870-46497994',
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
  'unifunc' => 'content_50491001572f75_04071717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50491001572f75_04071717')) {function content_50491001572f75_04071717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<form action="" method="GET" class="js-tag-search-form search-tags">
	<input type="text" name="tag" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_search'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-full autocomplete-tags js-tag-search" />
</form>


<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>