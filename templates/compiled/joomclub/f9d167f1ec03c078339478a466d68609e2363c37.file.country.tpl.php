<?php /* Smarty version Smarty-3.1.8, created on 2012-09-26 11:59:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19906152885062b5c7694099-06383203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d167f1ec03c078339478a466d68609e2363c37' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/country.tpl',
      1 => 1347100666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19906152885062b5c7694099-06383203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oCountry' => 0,
    'aPaging' => 0,
    'aUsersCountry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5062b5c792e327_71866912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5062b5c792e327_71866912')) {function content_5062b5c792e327_71866912($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_list'];?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCountry']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['aPaging']->value){?> (<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCount'];?>
)<?php }?></span></h2>

<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersCountry']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>