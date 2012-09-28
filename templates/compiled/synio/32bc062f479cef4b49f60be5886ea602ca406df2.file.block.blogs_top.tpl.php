<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:21:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12294105545048e9ac43ff99-99178796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32bc062f479cef4b49f60be5886ea602ca406df2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogs_top.tpl',
      1 => 1345862056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12294105545048e9ac43ff99-99178796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e9ac478424_81823602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e9ac478424_81823602')) {function content_5048e9ac478424_81823602($_smarty_tpl) {?><ul class="unstyled">
  <?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
  <li>
    <a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
  </li>
  <?php } ?>
</ul><?php }} ?>