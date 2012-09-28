<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:18:35
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18848200755048e8fba7e7b2-27510549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4bddb54e90c7f9d7b0e8f84ecf8aec1f527784' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/topic.tpl',
      1 => 1345033314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18848200755048e8fba7e7b2-27510549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e8fbaac932_28348933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fbaac932_28348933')) {function content_5048e8fbaac932_28348933($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
	<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>