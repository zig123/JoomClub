<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:02
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:906377705505be4dac31bb2-04232942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbb754f3b94741050c11fee0acbfe6990249f08' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_topic.tpl',
      1 => 1347100649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '906377705505be4dac31bb2-04232942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4dac981a0_57240789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4dac981a0_57240789')) {function content_505be4dac981a0_57240789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('topic_part_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo smarty_function_hook(array('run'=>'topic_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
      <div class="short-text">
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getTextShort();?>

        <div class="cls"></div>
		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTextShort()!=$_smarty_tpl->tpl_vars['oTopic']->value->getText()){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#cut" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>
" class="btn btn-primary" style="margin-top: 10px; margin-bottom: 10px"><?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCutText()){?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCutText();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>
 &rarr; <?php }?></a>
		<?php }?>
      </div>
	<?php }else{ ?>
      <div class="full-text">
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>

      </div>
	<?php }?>
	<?php echo smarty_function_hook(array('run'=>'topic_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_part_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>