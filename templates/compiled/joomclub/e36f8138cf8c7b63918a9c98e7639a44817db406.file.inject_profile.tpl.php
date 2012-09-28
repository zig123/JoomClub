<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/inject_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834588004505be4d1676ee2-85692260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36f8138cf8c7b63918a9c98e7639a44817db406' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/inject_profile.tpl',
      1 => 1346119526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834588004505be4d1676ee2-85692260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d16987b1_46874649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d16987b1_46874649')) {function content_505be4d16987b1_46874649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileProf()){?>
<li>
    <span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['prof']['prof'];?>
:</span>
    <strong><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
prof/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileProf(), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileProf(), ENT_QUOTES, 'UTF-8', true);?>
</a></strong>
</li>
<?php }?><?php }} ?>