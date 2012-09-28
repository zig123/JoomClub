<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 15:06:04
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/question_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:332597204505c4a1cbcaee7-58037505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18f95e6372f2af2174336e87ee7ea9bc0358e66' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/question_result.tpl',
      1 => 1347100648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '332597204505c4a1cbcaee7-58037505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aAnswer' => 0,
    'key' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c4a1ccdec15_78322391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c4a1ccdec15_78322391')) {function content_505c4a1ccdec15_78322391($_smarty_tpl) {?><ul class="poll-result" id="poll-result-original-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
	<?php  $_smarty_tpl->tpl_vars['aAnswer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aAnswer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aAnswer']->key => $_smarty_tpl->tpl_vars['aAnswer']->value){
$_smarty_tpl->tpl_vars['aAnswer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['aAnswer']->key;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerMax()==$_smarty_tpl->tpl_vars['aAnswer']->value['count']){?>class="most"<?php }?>>
			<dl>
				<dt>
					<strong><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerPercent($_smarty_tpl->tpl_vars['key']->value);?>
%</strong><br />
					<span>(<?php echo $_smarty_tpl->tpl_vars['aAnswer']->value['count'];?>
)</span>
				</dt>
				<dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aAnswer']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
<div style="width: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerPercent($_smarty_tpl->tpl_vars['key']->value);?>
%;" ></div></dd>
			</dl>
		</li>
	<?php } ?>
</ul>


<ul class="poll-result" id="poll-result-sort-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" style="display: none;">
	<?php  $_smarty_tpl->tpl_vars['aAnswer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aAnswer']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswers(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aAnswer']->key => $_smarty_tpl->tpl_vars['aAnswer']->value){
$_smarty_tpl->tpl_vars['aAnswer']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['aAnswer']->key;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerMax()==$_smarty_tpl->tpl_vars['aAnswer']->value['count']){?>class="most"<?php }?>>
			<dl>
				<dt>
					<strong><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerPercent($_smarty_tpl->tpl_vars['key']->value);?>
%</strong><br />
					<span>(<?php echo $_smarty_tpl->tpl_vars['aAnswer']->value['count'];?>
)</span>
				</dt>
				<dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aAnswer']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
<div style="width: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionAnswerPercent($_smarty_tpl->tpl_vars['key']->value);?>
%;" ></div></dd>
			</dl>
		</li>
	<?php } ?>
</ul>



<div class="poll-total">
	<i class="poll-sort" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_vote_result_sort'];?>
" onclick="return ls.poll.switchResult(this, <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
);"></i>
	
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_vote_result'];?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionCountVote();?>
<br />
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_question_abstain_result'];?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getQuestionCountVoteAbstain();?>

</div><?php }} ?>