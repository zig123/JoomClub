<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:20:36
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/topic_part_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4303466735048e974969ac5-50990555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec826bbf2cab6109484d750e544f34d81f68a588' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/topic_part_footer.tpl',
      1 => 1346766190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4303466735048e974969ac5-50990555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'oBlog' => 0,
    'oUser' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
    'oVote' => 0,
    'oUserCurrent' => 0,
    'oConfig' => 0,
    'bVoteInfoShow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e974c9a1a5_42104446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e974c9a1a5_42104446')) {function content_5048e974c9a1a5_42104446($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?>	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oFavourite"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getFavourite(), null, 0);?>


	<footer class="topic-footer">
		<ul class="topic-info">
			<li class="topic-info-date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y"),$_smarty_tpl);?>
</li>
			<li class="topic-info-separator"></li>
			<li class="topic-info-title"><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="topic-blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
			<li class="topic-info-separator"></li>
			<li class="topic-info-author">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" rel="popover" href="#" data-original-title="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
" class="popover-<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
                <div id="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
" style="display: none; width: 250px">
                  <div style="float: left; width: 70px; margin-right: 20px"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(64);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
" width="70" /></div>

                  <div style="float: left; width: 150px;">
                    <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
</b><br />
                    <?php if (($_smarty_tpl->tpl_vars['oUser']->value->getProfileCountry()||$_smarty_tpl->tpl_vars['oUser']->value->getProfileCity())){?>
                      <?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileCountry()){?>
                        <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileCity()){?>,<?php }?>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileCity()){?>
                        <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUser']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
</a>
                      <?php }?>
                    <?php }?>
                    <div>
                      <i class="icon-synio-star-green"></i> Рейтинг: <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getRating();?>
<br />
                      <i class="icon-synio-star-green"></i> Сила: <?php echo $_smarty_tpl->tpl_vars['oUser']->value->getSkill();?>
<br />
                      <i class="icon-synio-star-green"></i> Публикации: <?php echo $_smarty_tpl->tpl_vars['oUser']->value->Topic_GetCountTopicsPersonalByUser($_smarty_tpl->tpl_vars['oUser']->value->getId(),1);?>
<br />
                      <i class="icon-synio-star-green"></i> Комментарии: <?php echo $_smarty_tpl->tpl_vars['oUser']->value->Comment_GetCountCommentsByUserId($_smarty_tpl->tpl_vars['oUser']->value->getId(),'topic');?>
<br />
                      <i class="icon-synio-star-green"></i> Проекты: <?php echo $_smarty_tpl->tpl_vars['oUser']->value->Comment_GetCountCommentsByUserId($_smarty_tpl->tpl_vars['oUser']->value->getId(),'topic');?>

                    </div>
                  </div>
                  <div class="cls"></div>
                </div>
                <script language="JavaScript" type="text/javascript">
                  $(".popover-<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
")
                    .popover({
                      placement: 'right',
                      content: function getPopContent() { return document.getElementById('<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
').innerHTML; },
                      })
                </script>
			</li>
			<li class="topic-info-separator"></li>
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
			  <li class="topic-info-comments">
			    <?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountCommentNew()){?>
				  <span><a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_comment_read'];?>
" class="new"><i class="ico-comments"></i><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</a></span>
				<?php }else{ ?>
				  <span><a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_comment_read'];?>
"><?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountComment()){?><i class="ico-comments"></i><?php }else{ ?><i class="ico-comments"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</a></span>
				<?php }?>
			  </li>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
				<?php $_smarty_tpl->tpl_vars["bVoteInfoShow"] = new Smarty_variable(true, null, 0);?>
			<?php }?>
			
			<li class="topic-info-vote">
				<div id="vote_area_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="vote-topic
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>
																			vote-count-positive
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()<0){?>
																			vote-count-negative
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()==0){?>
																			vote-count-zero
																		<?php }?>
																	<?php }?>
																	
																	<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-not-self
																	<?php }?>
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																		voted
																		
																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()==0){?>
																			voted-zero
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>
																	
																	<?php if ((strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')&&!$_smarty_tpl->tpl_vars['oVote']->value)||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-nobuttons
																	<?php }?>
																	
																	<?php if (strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())>time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		vote-not-expired
																	<?php }?>

																	<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>js-infobox-vote-topic<?php }?>">
					<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,-1,'topic');"><span><i class="ico-up"></i></span></div>
					<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVote();?>
">
						<span id="vote_total_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
							<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
								<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getRating();?>

							<?php }else{ ?>
								<i onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,0,'topic');"></i>
							<?php }?>
						</span>
					</div>
					<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,1,'topic');"><span><i class="ico-down"></i></span></div>
					<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
						<div id="vote-info-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" style="display: none;">
							<ul class="vote-topic-info">
								<li><i class="icon-synio-vote-info-up"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteUp();?>
</li>
								<li><i class="icon-synio-vote-info-down"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteDown();?>
</li>
								<li><i class="icon-synio-vote-info-zero"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteAbstain();?>
</li>
								<?php echo smarty_function_hook(array('run'=>'topic_show_vote_stats','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

							</ul>
						</div>
					<?php }?>
				</div>
			</li>
			
			<?php echo smarty_function_hook(array('run'=>'topic_show_info','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		</ul>

		
		<?php if (!$_smarty_tpl->tpl_vars['bTopicList']->value){?>
			<?php echo smarty_function_hook(array('run'=>'topic_show_userads','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'position'=>'top'),$_smarty_tpl);?>

			<?php echo smarty_function_hook(array('run'=>'topic_show_userads','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'position'=>'bottom'),$_smarty_tpl);?>

			<?php echo smarty_function_hook(array('run'=>'topic_show_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		<?php }?>
	</footer>
</article> <!-- /.topic --><?php }} ?>