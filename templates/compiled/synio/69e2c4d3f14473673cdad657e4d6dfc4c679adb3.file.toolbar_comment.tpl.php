<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:21:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/opencomments/templates/skin/synio/toolbar_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3514630485048e9ac512079-85950542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e2c4d3f14473673cdad657e4d6dfc4c679adb3' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/opencomments/templates/skin/synio/toolbar_comment.tpl',
      1 => 1346936202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3514630485048e9ac512079-85950542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'params' => 0,
    'aPagingCmt' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e9ac551ac4_79222845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e9ac551ac4_79222845')) {function content_5048e9ac551ac4_79222845($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['aPagingCmt'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['aPagingCmt'], null, 0);?>
	<section class="toolbar-update" id="update" style="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>display: none;<?php }?>">
		<a href="#" class="update-comments" id="update-comments" onclick="ls.comments.load(<?php echo $_smarty_tpl->tpl_vars['params']->value['iTargetId'];?>
,'<?php echo $_smarty_tpl->tpl_vars['params']->value['sTargetType'];?>
'); return false;"><i></i></a>
		<a href="#" class="new-comments" id="new_comments_counter" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_count_new'];?>
" onclick="ls.comments.goToNextComment(); return false;"></a>

		<input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['iMaxIdComment'];?>
" />
		<input type="hidden" id="comment_use_paging" value="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>1<?php }?>" />
	</section>
<?php }else{ ?>
    <input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['iMaxIdComment'];?>
" />
<?php }?>
	
<?php }} ?>