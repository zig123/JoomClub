<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 01:21:17
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/sitemap/templates/skin/default/sitemap_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662795651504a654dadddd6-79925769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4f75bc5e6a6665d9a97f4c502cc6baf72fb0fc' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/sitemap/templates/skin/default/sitemap_index.tpl',
      1 => 1345962563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662795651504a654dadddd6-79925769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sTemplateWebPathPluginSitemap' => 0,
    'aData' => 0,
    'aItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504a654dbc1a09_72313731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504a654dbc1a09_72313731')) {function content_504a654dbc1a09_72313731($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<?php echo '<?xml';?>-stylesheet type="text/xsl" href="<?php echo $_smarty_tpl->tpl_vars['sTemplateWebPathPluginSitemap']->value;?>
sitemap_index.xsl"<?php echo '?>';?>
<sitemapindex xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php  $_smarty_tpl->tpl_vars['aItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aItem']->key => $_smarty_tpl->tpl_vars['aItem']->value){
$_smarty_tpl->tpl_vars['aItem']->_loop = true;
?>
    <sitemap>
        <loc><?php echo $_smarty_tpl->tpl_vars['aItem']->value['loc'];?>
</loc>
    </sitemap>
<?php } ?>
</sitemapindex><?php }} ?>