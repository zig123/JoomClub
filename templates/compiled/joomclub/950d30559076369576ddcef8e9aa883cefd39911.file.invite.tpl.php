<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 03:42:19
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionRegistration/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299161807505cfb5b524273-39748402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950d30559076369576ddcef8e9aa883cefd39911' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionRegistration/invite.tpl',
      1 => 1347100671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299161807505cfb5b524273-39748402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505cfb5b5ee024_53528314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505cfb5b5ee024_53528314')) {function content_505cfb5b5ee024_53528314($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite'];?>
</h2>


<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
invite/" method="POST">
	<p><label><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_code'];?>
:</label>
	<input type="text" name="invite_code" class="input-text input-width-300" /></p>

	<input type="submit" name="submit_invite" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_check'];?>
" class="button" />
</form>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>