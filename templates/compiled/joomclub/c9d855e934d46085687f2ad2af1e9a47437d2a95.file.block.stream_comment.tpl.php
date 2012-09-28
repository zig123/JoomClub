<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.stream_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1160514508505be4db544782-26612513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d855e934d46085687f2ad2af1e9a47437d2a95' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.stream_comment.tpl',
      1 => 1347100651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1160514508505be4db544782-26612513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aComments' => 0,
    'oComment' => 0,
    'oTopic' => 0,
    'oConfig' => 0,
    'oUser' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db5b9fb1_70314774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db5b9fb1_70314774')) {function content_505be4db5b9fb1_70314774($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
?><div class="latest-comment-list">
	<?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
$_smarty_tpl->tpl_vars['oComment']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getUser(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oTopic"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getTarget(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>

		<div class="stream-comment-item">
            <div><a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></div>
			<i class="icon-user"></i>&nbsp;
            <a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>: <span><?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oComment']->value->getText())),100,'...'), ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
	<?php } ?>
</div>


<footer>
	<a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments_all'];?>
</a> · <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
allcomments/">RSS</a>
</footer><?php }} ?>