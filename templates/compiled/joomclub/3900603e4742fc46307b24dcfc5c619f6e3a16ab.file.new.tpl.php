<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 21:49:31
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1739668454505f4bab144cb2-99472708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3900603e4742fc46307b24dcfc5c619f6e3a16ab' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/new.tpl',
      1 => 1347100666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739668454505f4bab144cb2-99472708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersRegister' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505f4bab1d6303_73554537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505f4bab1d6303_73554537')) {function content_505f4bab1d6303_73554537($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersRegister']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>