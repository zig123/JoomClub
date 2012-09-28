<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:39
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/likebuttons/templates/skin/default/likebuttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:807040844505bec076a6648-15435720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfbe61443af4c5a66501fa57098f1ab4780320ea' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/likebuttons/templates/skin/default/likebuttons.tpl',
      1 => 1347684738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807040844505bec076a6648-15435720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec079755b1_92494559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec079755b1_92494559')) {function content_505bec079755b1_92494559($_smarty_tpl) {?>

<div class="likes-block">
    <a href="?hash=event_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="like l-fb">
        <i class="l-ico"></i>
        <span class="l-count"></span>
    </a>
    <a href="?hash=event_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="like l-vk">
        <i class="l-ico"></i>
        <span class="l-count"></span>
    </a>
    <a href="?hash=event_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="like l-tw">
        <i class="l-ico"></i>
        <span class="l-count"></span>
    </a>
</div>


    
    
    
        
            
        
    
    
        
            
            
        
        
            
            
        
        
            
            
        
    

<?php }} ?>