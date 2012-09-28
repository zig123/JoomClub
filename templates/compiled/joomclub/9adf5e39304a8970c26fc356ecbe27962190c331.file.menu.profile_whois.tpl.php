<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235025755505be4d165f4d1-60720425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9adf5e39304a8970c26fc356ecbe27962190c331' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/menu.profile_whois.tpl',
      1 => 1347100647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235025755505be4d165f4d1-60720425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d1666343_83358055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1666343_83358055')) {function content_505be4d1666343_83358055($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo smarty_function_hook(array('run'=>'menu_profile_whois','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>
<?php }} ?>