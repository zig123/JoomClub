<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 22:04:01
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:694015037505cac11965523-11084157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926db4332ed03938b92084d9803a3d02b2bbee33' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/city.tpl',
      1 => 1347100666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '694015037505cac11965523-11084157',
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
  'unifunc' => 'content_505cac119fc1f7_33217244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505cac119fc1f7_33217244')) {function content_505cac119fc1f7_33217244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_list'];?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCity']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['aPaging']->value){?> (<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCount'];?>
)<?php }?></span></h2>

<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersCity']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>