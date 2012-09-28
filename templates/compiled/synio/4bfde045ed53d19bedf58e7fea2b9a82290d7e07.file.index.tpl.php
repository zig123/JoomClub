<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 05:18:00
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189139632150494b48e10b16-67272212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bfde045ed53d19bedf58e7fea2b9a82290d7e07' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionBlog/index.tpl',
      1 => 1345033354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189139632150494b48e10b16-67272212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50494b48ea2200_57741432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50494b48ea2200_57741432')) {function content_50494b48ea2200_57741432($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>