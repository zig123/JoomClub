<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 14:05:18
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/favourites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1549924218505d8d5ea6c0c1-85723106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00ec99f78ec7c64e7f96469428a23b25399f8cc0' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/favourites.tpl',
      1 => 1347100676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1549924218505d8d5ea6c0c1-85723106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTalks' => 0,
    'aLang' => 0,
    'oTalk' => 0,
    'oTalkUser' => 0,
    'oUserCurrent' => 0,
    'oUser' => 0,
    'TALK_USER_ACTIVE' => 0,
    'oTalkUserAuthor' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d8d5eb6afa3_23029311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d8d5eb6afa3_23029311')) {function content_505d8d5eb6afa3_23029311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('menu.talk.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php if ($_smarty_tpl->tpl_vars['aTalks']->value){?>
	<table class="table table-talk">
		<thead>
			<tr>
				<th class="cell-favourite"></th>
				<th class="cell-recipients"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_target'];?>
</th>
				<th class="cell-title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_title'];?>
</th>
				<th class="cell-date ta-r"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_date'];?>
</th>
			</tr>
		</thead>

		<tbody>
		<?php  $_smarty_tpl->tpl_vars['oTalk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTalks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTalk']->key => $_smarty_tpl->tpl_vars['oTalk']->value){
$_smarty_tpl->tpl_vars['oTalk']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars["oTalkUserAuthor"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalk']->value->getTalkUser(), null, 0);?>
			<tr>
				<td class="cell-favourite">
					<a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
,this,'talk');" class="favourite <?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getIsFavourite()){?>active<?php }?>"></a>
				</td>
				<td>
					<?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalkUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTalk']->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
$_smarty_tpl->tpl_vars['oTalkUser']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
						<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalkUser']->value->getUser(), null, 0);?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="user <?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()!=$_smarty_tpl->tpl_vars['TALK_USER_ACTIVE']->value){?>inactive<?php }?>"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
						<?php }?>
					<?php } ?>

				</td>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew()||!$_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getDateLast()){?>
					<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</strong></a>
				<?php }else{ ?>
					<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
				<?php }?>
				&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getCountComment()){?>
					<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getCountComment();?>
 <?php if ($_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew()){?>+<?php echo $_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew();?>
<?php }?>
				<?php }?>
				</td>
				<td class="cell-date ta-r"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTalk']->value->getDate()),$_smarty_tpl);?>
</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php }else{ ?>
	<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_favourite_empty'];?>
</div>
<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>