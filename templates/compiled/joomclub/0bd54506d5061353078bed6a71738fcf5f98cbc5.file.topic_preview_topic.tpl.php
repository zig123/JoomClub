<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 14:42:49
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_preview_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199837616505d962972cad6-81722674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd54506d5061353078bed6a71738fcf5f98cbc5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_preview_topic.tpl',
      1 => 1347100649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199837616505d962972cad6-81722674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'sTag' => 0,
    'oUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d96297e51d9_71550372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d96297e51d9_71550372')) {function content_505d96297e51d9_71550372($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>

<h3 class="profile-page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_preview'];?>
</h3>

<article class="topic topic-type-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
">
	<header class="topic-header">
		<h1 class="topic-title">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>

		</h1>

		<div class="topic-info">
			<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" pubdate title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
			<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>

			</time>
		</div>
	</header>

	<div class="topic-content text">
		<?php echo smarty_function_hook(array('run'=>'topic_preview_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>


		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>


		<?php echo smarty_function_hook(array('run'=>'topic_preview_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

	</div>

	<footer class="topic-footer">
		<ul class="topic-tags">
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags'];?>
:</li>
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray()){?><?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sTag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
$_smarty_tpl->tpl_vars['sTag']->_loop = true;
 $_smarty_tpl->tpl_vars['sTag']->index++;
 $_smarty_tpl->tpl_vars['sTag']->first = $_smarty_tpl->tpl_vars['sTag']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_list']['first'] = $_smarty_tpl->tpl_vars['sTag']->first;
?><li><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_list']['first']){?>, <?php }?><a rel="tag" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['sTag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }else{ ?><li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_tags_empty'];?>
</li><?php }?>
		</ul>

		<ul class="topic-info">
			<li class="topic-info-author"><a rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'topic_preview_show_info','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		</ul>

		<?php echo smarty_function_hook(array('run'=>'topic_preview_show_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

	</footer>
</article>


<button type="submit"  name="submit_topic_publish" class="button button-primary fl-r" onclick="jQuery('#submit_topic_publish').trigger('click');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_publish'];?>
</button>
<button type="submit"  name="submit_preview" onclick="jQuery('#text_preview').html('').hide(); return false;" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_preview_close'];?>
</button>
<button type="submit"  name="submit_topic_save" class="button" onclick="jQuery('#submit_topic_save').trigger('click');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_create_submit_save'];?>
</button><?php }} ?>