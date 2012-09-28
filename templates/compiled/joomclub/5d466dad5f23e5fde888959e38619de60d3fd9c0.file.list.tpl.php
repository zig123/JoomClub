<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 14:52:33
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionUserfeed/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1838313230505c46f1d56540-13973338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d466dad5f23e5fde888959e38619de60d3fd9c0' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionUserfeed/list.tpl',
      1 => 1347100678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838313230505c46f1d56540-13973338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTopics' => 0,
    'bDisableGetMoreButton' => 0,
    'iUserfeedLastId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c46f1dda665_89234815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c46f1dda665_89234815')) {function content_505c46f1dda665_89234815($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php if (count($_smarty_tpl->tpl_vars['aTopics']->value)){?>
    <?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
        <div id="userfeed_loaded_topics"></div>
        <input type="hidden" id="userfeed_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iUserfeedLastId']->value;?>
" />
        <a class="stream-get-more" id="userfeed_get_more" href="javascript:ls.userfeed.getMore()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_no_events'];?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>