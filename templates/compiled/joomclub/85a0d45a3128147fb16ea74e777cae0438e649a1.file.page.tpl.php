<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 13:03:27
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/page/templates/skin/default/actions/ActionPage/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1617926319505ed05f161520-15408292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a0d45a3128147fb16ea74e777cae0438e649a1' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/page/templates/skin/default/actions/ActionPage/page.tpl',
      1 => 1345033302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1617926319505ed05f161520-15408292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505ed05f836673_55030947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505ed05f836673_55030947')) {function content_505ed05f836673_55030947($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="topic">
	<div class="topic-content text">
		<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
			<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['oPage']->value->getAutoBr()){?>
				<?php echo nl2br($_smarty_tpl->tpl_vars['oPage']->value->getText());?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

			<?php }?>
		<?php }?>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>