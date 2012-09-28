<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 10:43:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionLogin/exit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784914921504997772ab3e9-69234476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7164f1349d2b3a2e7478e11f9db6f7e54692f78' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionLogin/exit.tpl',
      1 => 1345033357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784914921504997772ab3e9-69234476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50499777337cc6_42975478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50499777337cc6_42975478')) {function content_50499777337cc6_42975478($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_exit_notice'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>