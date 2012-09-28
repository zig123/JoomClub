<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200918679505be4c9d24842-57034163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6d10762484085f1556c860b4dfbe63818dcafb' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/nav.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200918679505be4c9d24842-57034163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9d41528_73085637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9d41528_73085637')) {function content_505be4c9d41528_73085637($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
  <?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?>
<?php }} ?>