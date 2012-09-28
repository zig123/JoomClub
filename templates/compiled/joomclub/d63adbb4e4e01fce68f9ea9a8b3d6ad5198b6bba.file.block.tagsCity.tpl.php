<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsCity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:552130630505bec155d3178-50729095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63adbb4e4e01fce68f9ea9a8b3d6ad5198b6bba' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsCity.tpl',
      1 => 1347100652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '552130630505bec155d3178-50729095',
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
  'unifunc' => 'content_505bec15602112_57567994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec15602112_57567994')) {function content_505bec15602112_57567994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
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