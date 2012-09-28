<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:18:35
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19612456105048e8fb933113-39321346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c70bdfc819752ada722967ba0bf99de0be1b0c10' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/nav.tpl',
      1 => 1346078988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19612456105048e8fb933113-39321346',
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
  'unifunc' => 'content_5048e8fb961b31_23331405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fb961b31_23331405')) {function content_5048e8fb961b31_23331405($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
  <?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?>
<?php }} ?>