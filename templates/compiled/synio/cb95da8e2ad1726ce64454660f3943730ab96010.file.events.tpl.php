<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 16:21:14
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionStream/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961742075049e6baf0ecd2-10633597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb95da8e2ad1726ce64454660f3943730ab96010' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionStream/events.tpl',
      1 => 1345033364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961742075049e6baf0ecd2-10633597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStreamEvents' => 0,
    'oStreamEvent' => 0,
    'sDateLast' => 0,
    'aLang' => 0,
    'oUser' => 0,
    'oTarget' => 0,
    'sTextEvent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049e6bb42f0e4_87445528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049e6bb42f0e4_87445528')) {function content_5049e6bb42f0e4_87445528($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_json')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.json.php';
?><?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['oStreamEvent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oStreamEvent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aStreamEvents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oStreamEvent']->key => $_smarty_tpl->tpl_vars['oStreamEvent']->value){
$_smarty_tpl->tpl_vars['oStreamEvent']->_loop = true;
?>		
		<?php $_smarty_tpl->tpl_vars['oTarget'] = new Smarty_variable($_smarty_tpl->tpl_vars['oStreamEvent']->value->getTarget(), null, 0);?>

		<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value->getDateAdded(),'format'=>"j F Y"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=$_smarty_tpl->tpl_vars['sDateLast']->value){?>
			<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value->getDateAdded(),'format'=>"j F Y"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['sDateLast'] = new Smarty_variable($_tmp2, null, 0);?>
			
			<li class="stream-header-date">
				<?php ob_start();?><?php echo smarty_function_date_format(array('date'=>time(),'format'=>"j F Y"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==$_smarty_tpl->tpl_vars['sDateLast']->value){?>
					<?php echo $_smarty_tpl->tpl_vars['aLang']->value['today'];?>

				<?php }else{ ?>
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value->getDateAdded(),'format'=>"j F Y"),$_smarty_tpl);?>

				<?php }?>
			</li>
		<?php }?>

		<?php $_smarty_tpl->tpl_vars['oUser'] = new Smarty_variable($_smarty_tpl->tpl_vars['oStreamEvent']->value->getUser(), null, 0);?>

		<li class="stream-item stream-item-type-<?php echo $_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType();?>
">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
			
			<p class="info"><a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><strong><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</strong></a> ·
			<span class="date" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value->getDateAdded()),$_smarty_tpl);?>
"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value->getDateAdded(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</span></p>

		
			<?php if ($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='add_topic'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_topic'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_topic_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='add_comment'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_comment'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_comment_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getTarget()->getUrl();?>
#comment<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTarget()->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php $_smarty_tpl->tpl_vars['sTextEvent'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTarget']->value->getText()),200), null, 0);?>
				<?php if (trim($_smarty_tpl->tpl_vars['sTextEvent']->value)){?>
					<div class="stream-comment-preview"><?php echo $_smarty_tpl->tpl_vars['sTextEvent']->value;?>
</div>
				<?php }?>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='add_blog'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_blog'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_blog_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='vote_blog'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_blog'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_blog_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='vote_topic'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_topic'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_topic_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='vote_comment'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_comment'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_comment_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getTarget()->getUrl();?>
#comment<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTarget()->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='vote_user'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_user'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_vote_user_female'];?>
 <?php }?> 
				<span class="user-avatar user-avatar-n">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getLogin();?>
</a>
				</span>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='join_blog'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_join_blog'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_join_blog_female'];?>
 <?php }?> 
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTarget']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='add_friend'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_friend'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_friend_female'];?>
 <?php }?>
				<span class="user-avatar user-avatar-n">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getLogin();?>
</a>
				</span>
			<?php }elseif($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()=='add_wall'){?>
				<?php if ($_smarty_tpl->tpl_vars['oUser']->value->getProfileSex()!='woman'){?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_wall'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_list_event_add_wall_female'];?>
 <?php }?>
				<span class="user-avatar user-avatar-n">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getWallUser()->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getWallUser()->getProfileAvatarPath(24);?>
" alt="avatar" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getUrlWall();?>
"><?php echo $_smarty_tpl->tpl_vars['oTarget']->value->getWallUser()->getLogin();?>
</a>
				</span>
				<?php $_smarty_tpl->tpl_vars['sTextEvent'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTarget']->value->getText()),200), null, 0);?>
				<?php if (trim($_smarty_tpl->tpl_vars['sTextEvent']->value)){?>
					<div class="stream-comment-preview"><?php echo $_smarty_tpl->tpl_vars['sTextEvent']->value;?>
</div>
				<?php }?>
			<?php }else{ ?>
				<?php echo smarty_function_hook(array('run'=>"stream_list_event_".($_smarty_tpl->tpl_vars['oStreamEvent']->value->getEventType()),'oStreamEvent'=>$_smarty_tpl->tpl_vars['oStreamEvent']->value),$_smarty_tpl);?>

			<?php }?>
		</li>
	<?php } ?>


	<script type="text/javascript">
		jQuery(document).ready(function($){
			ls.stream.dateLast = <?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['sDateLast']->value),$_smarty_tpl);?>
;
		});
	</script>
<?php }?><?php }} ?>