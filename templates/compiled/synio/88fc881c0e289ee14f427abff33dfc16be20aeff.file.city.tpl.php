<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 17:57:48
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPeople/city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:655946035049fd5c26df33-01212585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88fc881c0e289ee14f427abff33dfc16be20aeff' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPeople/city.tpl',
      1 => 1345033358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655946035049fd5c26df33-01212585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oCity' => 0,
    'aPaging' => 0,
    'aUsersCity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049fd5c348c39_42721638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049fd5c348c39_42721638')) {function content_5049fd5c348c39_42721638($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_list'];?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCity']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['aPaging']->value){?> (<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCount'];?>
)<?php }?></span></h2>

<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersCity']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>