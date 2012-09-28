<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:21:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7093682125048e9ac47cec5-00873487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80123fe717bc05abbb486139a22063dffaae038' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.blogs.tpl',
      1 => 1346258330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7093682125048e9ac47cec5-00873487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sBlogsTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e9ac4a2149_94674743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e9ac4a2149_94674743')) {function content_5048e9ac4a2149_94674743($_smarty_tpl) {?><section class="block-blogs">
  <header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs'];?>
</h3></header>
  <div class="block-content"><?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>
</div>
</section>
<?php }} ?>