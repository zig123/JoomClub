<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 08:14:01
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionComments/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74062008550497489221c25-12535196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80beb2f8f138167415195eaa8586ac97609ad1d3' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionComments/index.tpl',
      1 => 1345033355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74062008550497489221c25-12535196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50497489302b74_56507077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50497489302b74_56507077')) {function content_50497489302b74_56507077($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comments_all'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>