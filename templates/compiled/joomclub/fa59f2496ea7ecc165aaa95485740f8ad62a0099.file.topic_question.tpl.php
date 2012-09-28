<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 15:06:04
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214045342505c4a1c78e894-98655884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa59f2496ea7ecc165aaa95485740f8ad62a0099' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_question.tpl',
      1 => 1347100649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214045342505c4a1c78e894-98655884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'key' => 0,
    'aAnswer' => 0,
    'aLang' => 0,
    'bTopicList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c4a1cbc6629_38851329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c4a1cbc6629_38851329')) {function content_505c4a1cbc6629_38851329($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('topic_part_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="topic_question_area_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="poll">
	<?php if (!$_smarty_tpl->tpl_vars['oTopic']->value->getUserQuestionIsVote()){?>
		<ul class="poll-vote">
			<?php  $_smarty_tpl->tpl_vars['aAnswer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aAnswer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aAnswer']->key => $_smarty_tpl->tpl_vars['aAnswer']->value){
$_smarty_tpl->tpl_vars['aAnswer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['aAnswer']->key;
?>
				<li><label><input type="radio" id="topic_answer_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="topic_answer_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onchange="jQuery('#topic_answer_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
_value').val(jQuery(this).val());" /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aAnswer']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</label></li>
			<?php } ?>
		</ul>

		<button type="submit"  onclick="ls.poll.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,jQuery('#topic_answer_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
_value').val());" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_vote'];?>
</button>
		<button type="submit"  onclick="ls.poll.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,-1)" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_abstain'];?>
</button>
		
		<input type="hidden" id="topic_answer_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
_value" value="-1" />
	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate ('question_result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>


<div class="topic-content text">
	<?php echo smarty_function_hook(array('run'=>'topic_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

	
	<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>

	
	<?php echo smarty_function_hook(array('run'=>'topic_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

</div> 



<?php echo $_smarty_tpl->getSubTemplate ('topic_part_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>