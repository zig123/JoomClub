<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 09:28:16
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTalk/read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946123675504ad770113529-78104772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b95175e9eaeeec14b9608e1f565a189bcea63dfe' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionTalk/read.tpl',
      1 => 1345033365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1946123675504ad770113529-78104772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTalk' => 0,
    'oUser' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    'bNoComments' => 0,
    'oTalkUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504ad77025bcc1_39291907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504ad77025bcc1_39291907')) {function content_504ad77025bcc1_39291907($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('menu.talk.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalk']->value->getUser(), null, 0);?>


<article class="topic topic-type-talk">
	<header class="topic-header">
		<h1 class="topic-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</h1>
		
	</header>


	<div class="topic-content text">
		<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getText();?>

	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionTalk/speakers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	<footer class="topic-footer">
		<ul class="topic-info">
			<li class="topic-info-author">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
				<a rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
			</li>
			<li class="topic-info-date">
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTalk']->value->getDate(),'format'=>'c'),$_smarty_tpl);?>
" pubdate title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTalk']->value->getDate(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTalk']->value->getDate(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
			</li>
			<li class="topic-info-favourite" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
,$('#fav_topic_<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
'),'talk');"><i id="fav_topic_<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
" class="favourite <?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getIsFavourite()){?>active<?php }?>"></i></li>
			<li class="delete"><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_delete_confirm'];?>
');" class="delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['delete'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'talk_read_info_item','talk'=>$_smarty_tpl->tpl_vars['oTalk']->value),$_smarty_tpl);?>

		</ul>
	</footer>
</article>

<?php $_smarty_tpl->tpl_vars["oTalkUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalk']->value->getTalkUser(), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['bNoComments']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ('comment_tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iTargetId'=>$_smarty_tpl->tpl_vars['oTalk']->value->getId(),'sTargetType'=>'talk','iCountComment'=>$_smarty_tpl->tpl_vars['oTalk']->value->getCountComment(),'sDateReadLast'=>$_smarty_tpl->tpl_vars['oTalkUser']->value->getDateLast(),'sNoticeCommentAdd'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_add'],'bNoCommentFavourites'=>true), 0);?>

<?php }?>
			
			
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>