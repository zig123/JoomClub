<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:12:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPersonalBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158410591950498245846996-28012088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73a75889788e87fa889f211457c39e704be7cb2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPersonalBlog/index.tpl',
      1 => 1345033359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158410591950498245846996-28012088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049824587ffa0_45768986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049824587ffa0_45768986')) {function content_5049824587ffa0_45768986($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>