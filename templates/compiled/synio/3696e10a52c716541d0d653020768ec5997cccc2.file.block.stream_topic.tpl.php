<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:21:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.stream_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9720317845048e9ac347cf8-99778871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3696e10a52c716541d0d653020768ec5997cccc2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/blocks/block.stream_topic.tpl',
      1 => 1346386681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9720317845048e9ac347cf8-99778871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopics' => 0,
    'oTopic' => 0,
    'oUser' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e9ac3c9580_91980088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e9ac3c9580_91980088')) {function content_5048e9ac3c9580_91980088($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><div class="latest-topic-list">
	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>

		<div class="stream-topic-item">
		    <a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
             →
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" class="stream-topic-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
            &nbsp;&nbsp;<span class="red-color"><i class="ico-comments"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</span>
            <div><?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTopic']->value->getText())),150,'...'), ENT_QUOTES, 'UTF-8', true);?>
</div>
		</div>
	<?php } ?>
</div>


<footer>
	<a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics_all'];?>
</a> · <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
new/">RSS</a>
</footer>
<?php }} ?>