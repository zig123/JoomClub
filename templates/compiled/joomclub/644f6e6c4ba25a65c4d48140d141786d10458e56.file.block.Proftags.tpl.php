<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/blocks/block.Proftags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410239971505bec154b6046-56504095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644f6e6c4ba25a65c4d48140d141786d10458e56' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/blocks/block.Proftags.tpl',
      1 => 1346390105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410239971505bec154b6046-56504095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTagList' => 0,
    'aTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec15520266_96186307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec15520266_96186307')) {function content_505bec15520266_96186307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aTagList']->value&&count($_smarty_tpl->tpl_vars['aTagList']->value)>0){?>
<section class="proflist">
  <header class="block-header"><h3>Специализации</h3></header>
  <div class="block-content">
    <?php  $_smarty_tpl->tpl_vars['aTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTagList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aTag']->key => $_smarty_tpl->tpl_vars['aTag']->value){
$_smarty_tpl->tpl_vars['aTag']->_loop = true;
?>
      <a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['aTag']->value['size'];?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
prof/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aTag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aTag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><br />
    <?php } ?>
  </div>
</section>
<?php }?><?php }} ?>