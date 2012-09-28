<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 23:21:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4693608795048f7b9831404-81109150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd910f4073c43776a2333876526a91ab676dc088f' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionIndex/index.tpl',
      1 => 1345033355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4693608795048f7b9831404-81109150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048f7b98bf0c5_03605504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048f7b98bf0c5_03605504')) {function content_5048f7b98bf0c5_03605504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>