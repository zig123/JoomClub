<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsCountry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1768900032505bec15594f89-04184433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46c4ae2d1b087f241a0953a5c8ead379e9c6f135' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsCountry.tpl',
      1 => 1347100652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768900032505bec15594f89-04184433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCountryList' => 0,
    'aLang' => 0,
    'oCountry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec155c40c2_18211167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec155c40c2_18211167')) {function content_505bec155c40c2_18211167($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aCountryList']->value&&count($_smarty_tpl->tpl_vars['aCountryList']->value)>0){?>
<section class="countrylist">
  <header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_country_tags'];?>
</h3></header>
  <div class="block-content">
    <?php  $_smarty_tpl->tpl_vars['oCountry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCountry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCountryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCountry']->key => $_smarty_tpl->tpl_vars['oCountry']->value){
$_smarty_tpl->tpl_vars['oCountry']->_loop = true;
?>
      <a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oCountry']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo $_smarty_tpl->tpl_vars['oCountry']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCountry']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</a>
    <?php } ?>
  </div>
</section>
<?php }?><?php }} ?>