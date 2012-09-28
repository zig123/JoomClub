<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/window_write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1377750734505be4c9ca9821-46189665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72790f8fb4a1d53013e79b252252c0b568c3afc5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/window_write.tpl',
      1 => 1347461240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1377750734505be4c9ca9821-46189665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iUserCurrentCountTopicDraft' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9d08c81_95719634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9d08c81_95719634')) {function content_505be4c9d08c81_95719634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_declension')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><div class="modal fade" id="topicadd" data-target="#topicadd">
  <div class="modal-header">
    <h3>Создать</h3>
  </div>

	<div class="modal-body"><ul class="write-list"><?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?><li class="write-item-type-draft"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value,$_smarty_tpl->tpl_vars['aLang']->value['draft_declension'],'russian');?>
</a></li><?php }?><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_topic'];?>
</a></li><li class="write-item-type-blog"><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_blog'];?>
</a></li><li class="write-item-type-message"><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_talk'];?>
</a></li><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
add/">Видео</a></li><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'photoset'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'photoset'),$_smarty_tpl);?>
add/">Расширение</a></li><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'question'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add_question'];?>
</a></li><?php echo smarty_function_hook(array('run'=>'write_item','isPopup'=>true),$_smarty_tpl);?>
</ul></div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
	<?php }} ?>