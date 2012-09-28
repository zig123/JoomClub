<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1813188138505bec15529d75-13074129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73911f25601e13730bea0dbd127229e45a7a885d' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionPeople/sidebar.tpl',
      1 => 1347100667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813188138505bec15529d75-13074129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aStat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec15587d99_27914024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec15587d99_27914024')) {function content_505bec15587d99_27914024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_insert_block')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/insert.block.php';
?><?php echo smarty_function_hook(array('run'=>'people_sidebar_begin'),$_smarty_tpl);?>

<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats'];?>
</h3>
	</header>
	
	
	<div class="block-content">
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_all'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_all'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_active'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_active'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_noactive'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_inactive'];?>
</strong></li>
		</ul>
		
		<br />
		
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_man'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_man'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_woman'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_woman'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_other'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_other'];?>
</strong></li>
		</ul>
	</div>
</section>


<?php echo smarty_insert_block(array('block' => 'tagsCountry'),$_smarty_tpl);?>

<?php echo smarty_insert_block(array('block' => 'tagsCity'),$_smarty_tpl);?>


<?php echo smarty_function_hook(array('run'=>'people_sidebar_end'),$_smarty_tpl);?>
<?php }} ?>