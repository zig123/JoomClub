<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 00:23:20
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.tagsCity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54272371950490638663703-12582557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53cc1d71cfc2ae4b6608c5680d46ad63c32a092' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.tagsCity.tpl',
      1 => 1346389679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54272371950490638663703-12582557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCityList' => 0,
    'aLang' => 0,
    'oCity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504906386a3be9_59083297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504906386a3be9_59083297')) {function content_504906386a3be9_59083297($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aCityList']->value&&count($_smarty_tpl->tpl_vars['aCityList']->value)>0){?>
<section class="citylist">
 <header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_city_tags'];?>
</h3></header>
 <div class="block-content">
   <?php  $_smarty_tpl->tpl_vars['oCity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCity']->key => $_smarty_tpl->tpl_vars['oCity']->value){
$_smarty_tpl->tpl_vars['oCity']->_loop = true;
?>
     <a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCity']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</a>
   <?php } ?>
 </div>
</section>
<?php }?><?php }} ?>