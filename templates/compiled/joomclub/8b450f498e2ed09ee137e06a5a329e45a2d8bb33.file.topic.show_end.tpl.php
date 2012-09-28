<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 14:04:42
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/topic.show_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1071718971505d8d3aac5278-33721240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b450f498e2ed09ee137e06a5a329e45a2d8bb33' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/topic.show_end.tpl',
      1 => 1347041325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1071718971505d8d3aac5278-33721240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'position' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d8d3ab0d886_73899584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d8d3ab0d886_73899584')) {function content_505d8d3ab0d886_73899584($_smarty_tpl) {?><div class="user_link <?php echo $_smarty_tpl->tpl_vars['position']->value;?>
">
    <a href="http://<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['link']->value['is_image']==0){?>
            <?php echo $_smarty_tpl->tpl_vars['link']->value['text_img'];?>

        <?php }else{ ?>
             <img src="http://<?php echo $_smarty_tpl->tpl_vars['link']->value['text_img'];?>
" alt="" />
        <?php }?>
    </a>
</div><?php }} ?>