<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 14:32:22
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/sitemap/templates/skin/default/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766292479505c42369d0604-04010908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6ef423c3f608ebb893fc537e1783257044f1aea' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/sitemap/templates/skin/default/sitemap.tpl',
      1 => 1345962564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766292479505c42369d0604-04010908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sTemplateWebPathPluginSitemap' => 0,
    'aData' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c4236a32ee8_08407145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c4236a32ee8_08407145')) {function content_505c4236a32ee8_08407145($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<?php echo '<?xml';?>-stylesheet type="text/xsl" href="<?php echo $_smarty_tpl->tpl_vars['sTemplateWebPathPluginSitemap']->value;?>
sitemap.xsl"<?php echo '?>';?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php  $_smarty_tpl->tpl_vars['oItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->key => $_smarty_tpl->tpl_vars['oItem']->value){
$_smarty_tpl->tpl_vars['oItem']->_loop = true;
?>
    <url>
        <loc><?php echo $_smarty_tpl->tpl_vars['oItem']->value['loc'];?>
</loc>
<?php if ($_smarty_tpl->tpl_vars['oItem']->value['lastmod']){?>
        <lastmod><?php echo $_smarty_tpl->tpl_vars['oItem']->value['lastmod'];?>
</lastmod>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['oItem']->value['changefreq']){?>
        <changefreq><?php echo $_smarty_tpl->tpl_vars['oItem']->value['changefreq'];?>
</changefreq>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['oItem']->value['priority']){?>
        <priority><?php echo $_smarty_tpl->tpl_vars['oItem']->value['priority'];?>
</priority>
<?php }?>
    </url>
<?php } ?>
</urlset><?php }} ?>