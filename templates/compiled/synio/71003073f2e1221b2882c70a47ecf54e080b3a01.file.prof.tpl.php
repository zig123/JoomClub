<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 09:22:19
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/actions/ActionPeople/prof.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1994650039504ad60bcb0078-68668787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71003073f2e1221b2882c70a47ecf54e080b3a01' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/actions/ActionPeople/prof.tpl',
      1 => 1346119529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1994650039504ad60bcb0078-68668787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oProf' => 0,
    'aPaging' => 0,
    'aUsersProf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504ad60bdcb0b2_87227178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504ad60bdcb0b2_87227178')) {function content_504ad60bdcb0b2_87227178($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['prof']['user_list_prof'];?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oProf']->value->getProfName(), ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['aPaging']->value){?> (<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCount'];?>
)<?php }?></span></h2>

<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersProf']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>