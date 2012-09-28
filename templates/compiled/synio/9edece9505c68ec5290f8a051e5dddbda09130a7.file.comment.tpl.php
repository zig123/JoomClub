<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:33:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/opencomments/templates/skin/synio/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15406579605048e8fc01b2f0-16117606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edece9505c68ec5290f8a051e5dddbda09130a7' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/opencomments/templates/skin/synio/comment.tpl',
      1 => 1346956402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15406579605048e8fc01b2f0-16117606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e8fc24e096_50230785',
  'variables' => 
  array (
    'oComment' => 0,
    'oUserCurrent' => 0,
    'sDateReadLast' => 0,
    'bOneComment' => 0,
    'oUser' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'oVote' => 0,
    'bNoCommentFavourites' => 0,
    'bAllowNewComment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fc24e096_50230785')) {function content_5048e8fc24e096_50230785($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getVote(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
<div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle gray-text-link" data-toggle="collapse" data-parent="#comment<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" href="#comment<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
-onetab">Комментарий удалён</a>
    </div>
    <div id="comment<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
-onetab" class="accordion-body collapse">
      <div class="accordion-inner">
<?php }?>
<section id="comment_id_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="comment
														<?php if ($_smarty_tpl->tpl_vars['oComment']->value->isBad()){?>
															comment-bad
														<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()){?>
															comment-deleted
														<?php }elseif($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oComment']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
															comment-self
														<?php }elseif($_smarty_tpl->tpl_vars['sDateReadLast']->value<=$_smarty_tpl->tpl_vars['oComment']->value->getDate()){?>
															comment-new
														<?php }?>">
	<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()||$_smarty_tpl->tpl_vars['bOneComment']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
		<a name="comment<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"></a>

		<div class="folding"></div>

		<div class="comment_list_avatar">
            <?php if (!$_smarty_tpl->tpl_vars['oUser']->value->getId()){?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="comment-avatar" />
                <br />
                <?php echo $_smarty_tpl->tpl_vars['oComment']->value->getGuestName();?>

                <i><small>(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['opencomments']['opencomments_guest'];?>
)</small></i>
            <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="comment-avatar" />
            </a>
            <br />
                <a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
            <?php }?>

        </div>

		<div id="comment_content_id_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="comment-content">
			<div class=" text">
				<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>

			</div>
		</div>
        <div class="cls"></div>


		<ul class="comment-info">
			<li class="comment-date">
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j.m H:i"),$_smarty_tpl);?>

				</time>
			</li>


			<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getTargetType()!='talk'){?>
				<li id="vote_area_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="vote<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getRating()>0){?> vote-count-positive<?php }elseif($_smarty_tpl->tpl_vars['oComment']->value->getRating()<0){?> vote-count-negative<?php }?><?php if ((strtotime($_smarty_tpl->tpl_vars['oComment']->value->getDate())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.comment.limit_time')&&!$_smarty_tpl->tpl_vars['oVote']->value)||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUser']->value->getId())){?> vote-expired<?php }?><?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> voted<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?> voted-up<?php }else{ ?> voted-down<?php }?><?php }?>">
					<div class="vote-up icon-plus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,1,'comment');"></div>
					<span class="vote-count" id="vote_total_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oComment']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getRating();?>
</span>
					<div class="vote-down icon-minus" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,-1,'comment');"></div>
				</li>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['bNoCommentFavourites']->value){?>
				<li class="comment-favourite">
					<div onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,'comment');" class="favourite<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getIsFavourite()){?> active<?php }?> icon-heart"></div>
					<span class="favourite-count red-color" id="fav_count_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite()>0){?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite();?>
<?php }?></span>
				</li>
			<?php }?>
			<li class="comment-link">
				<a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?>#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_url_notice'];?>
"><i class="icon-flag"></i></a>
			</li>

			<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getPid()){?>
				<li class="goto goto-comment-parent"><a href="#" onclick="ls.comments.goToParentComment(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getPid();?>
); return false;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_goto_parent'];?>
">↑</a></li>
			<?php }?>
			<li class="goto goto-comment-child"><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_goto_child'];?>
">↓</a></li>

			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
				<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&!$_smarty_tpl->tpl_vars['bAllowNewComment']->value){?>
					<li><a href="#" onclick="ls.comments.toggleCommentForm(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;" class="reply-link link-dotted"><i class="icon-share-alt"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_answer'];?>
</a></li>
				<?php }?>

				<?php if (!$_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
					<li><a href="#" class="comment-delete link-dotted" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;"><i class="icon-trash"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_delete'];?>
</a></li>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
					<li><a href="#" class="comment-repair link-dotted" onclick="ls.comments.toggle(this,<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_repair'];?>
</a></li>
				<?php }?>

				<?php echo smarty_function_hook(array('run'=>'comment_action','comment'=>$_smarty_tpl->tpl_vars['oComment']->value),$_smarty_tpl);?>

			<?php }?>
		</ul>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_was_delete'];?>

	<?php }?>
</section>
<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getDelete()&&($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
</div>
</div>
</div>
<?php }?><?php }} ?>