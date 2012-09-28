<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:757296765505be4db7dffb5-30552865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2cda2a1fec7d47a0b0839a13bdb3a818af4d01' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blogs.tpl',
      1 => 1347100651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '757296765505be4db7dffb5-30552865',
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
  'unifunc' => 'content_505be4db7e8dc5_97391254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db7e8dc5_97391254')) {function content_505be4db7e8dc5_97391254($_smarty_tpl) {?><section class="block-blogs">
  <header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs'];?>
</h3></header>
  <div class="block-content"><?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>
</div>
</section>
<?php }} ?>