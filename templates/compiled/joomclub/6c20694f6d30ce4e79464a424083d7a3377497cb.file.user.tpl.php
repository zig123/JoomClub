<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 18:01:18
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionStream/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:972224386505c732ed50f91-37365701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c20694f6d30ce4e79464a424083d7a3377497cb' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionStream/user.tpl',
      1 => 1347100675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972224386505c732ed50f91-37365701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aStreamEvents' => 0,
    'bDisableGetMoreButton' => 0,
    'iStreamLastId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c732ee2d597_24200616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c732ee2d597_24200616')) {function content_505c732ee2d597_24200616($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>"stream"), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</h2>

<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<ul class="stream-list" id="stream-list">
		<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionStream/events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</ul>

    <?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
        <input type="hidden" id="stream_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iStreamLastId']->value;?>
" />
        <a class="stream-get-more" id="stream_get_more" href="javascript:ls.stream.getMore()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_events'];?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>