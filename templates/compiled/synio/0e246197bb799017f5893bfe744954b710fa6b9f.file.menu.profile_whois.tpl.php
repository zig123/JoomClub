<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.profile_whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138354090250498731c86e96-78369465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e246197bb799017f5893bfe744954b710fa6b9f' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/menu.profile_whois.tpl',
      1 => 1346136320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138354090250498731c86e96-78369465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498731cef409_96663827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498731cef409_96663827')) {function content_50498731cef409_96663827($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo smarty_function_hook(array('run'=>'menu_profile_whois','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>
<?php }} ?>