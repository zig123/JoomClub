<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:51:43
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPeople/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10519368550498b6f548963-24698782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5223740ae3c7db73e6ed80a2fc43189a02fcbc28' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionPeople/new.tpl',
      1 => 1345033358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10519368550498b6f548963-24698782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersRegister' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498b6f5e7674_16666753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498b6f5e7674_16666753')) {function content_50498b6f5e7674_16666753($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersRegister']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>