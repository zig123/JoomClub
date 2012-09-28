<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 20:08:17
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436657086505c90f1a33569-76713278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d0152ae59d81975ab42f04e7695603b831b67a' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionTalk/inbox.tpl',
      1 => 1347100677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436657086505c90f1a33569-76713278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTalks' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    'oTalk' => 0,
    'oTalkUser' => 0,
    'oUserCurrent' => 0,
    'aTalkUserOther' => 0,
    'oUser' => 0,
    'TALK_USER_ACTIVE' => 0,
    'oTalkUserAuthor' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c90f1c23464_88677313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c90f1c23464_88677313')) {function content_505c90f1c23464_88677313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('noShowSystemMessage'=>false), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('menu.talk.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['aTalks']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionTalk/filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<form action="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" method="post" id="form_talks_list">
		<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
		<input type="hidden" name="submit_talk_read" id="form_talks_list_submit_read" value="" />
		<input type="hidden" name="submit_talk_del" id="form_talks_list_submit_del" value="" />

		<table class="table table-talk">
			<thead>
				<tr>
					<th class="cell-checkbox"><input type="checkbox" name="" class="input-checkbox" onclick="ls.tools.checkAll('form_talks_checkbox', this, true);"></th>
					<th class="cell-recipients"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_target'];?>
</th>
					<th class="cell-favourite">&nbsp;</th>
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
						<td class="cell-checkbox"><input type="checkbox" name="talk_select[<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
]" class="form_talks_checkbox input-checkbox" /></td>
						<td class="cell-recipients">
							<?php $_smarty_tpl->tpl_vars["aTalkUserOther"] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalkUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTalk']->value->getTalkUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTalkUser']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
$_smarty_tpl->tpl_vars['oTalkUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oTalkUser']->index++;
 $_smarty_tpl->tpl_vars['oTalkUser']->first = $_smarty_tpl->tpl_vars['oTalkUser']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users']['first'] = $_smarty_tpl->tpl_vars['oTalkUser']->first;
?><?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?><?php $_smarty_tpl->createLocalArrayVariable('aTalkUserOther', null, 0);
$_smarty_tpl->tpl_vars['aTalkUserOther']->value[] = $_smarty_tpl->tpl_vars['oTalkUser']->value;?><?php }?><?php } ?><?php  $_smarty_tpl->tpl_vars['oTalkUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTalkUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTalkUserOther']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTalkUser']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['oTalkUser']->key => $_smarty_tpl->tpl_vars['oTalkUser']->value){
$_smarty_tpl->tpl_vars['oTalkUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oTalkUser']->index++;
 $_smarty_tpl->tpl_vars['oTalkUser']->first = $_smarty_tpl->tpl_vars['oTalkUser']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users']['first'] = $_smarty_tpl->tpl_vars['oTalkUser']->first;
?><?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTalkUser']->value->getUser(), null, 0);?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['users']['first']){?>, <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="username <?php if ($_smarty_tpl->tpl_vars['oTalkUser']->value->getUserActive()!=$_smarty_tpl->tpl_vars['TALK_USER_ACTIVE']->value){?>inactive<?php }?>"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a><?php } ?>
						</td>
						<td class="cell-favourite">
							<a href="#" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
,this,'talk');" class="favourite <?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getIsFavourite()){?>active<?php }?>"></a>
						</td>
						<td class="cell-title">
							<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/" class="js-title-talk" title="<?php echo htmlspecialchars(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTalk']->value->getTextLast()),100,'...'), ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew()||!$_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getDateLast()){?><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</strong><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></a>
							
							<?php if ($_smarty_tpl->tpl_vars['oTalk']->value->getCountComment()){?>
								<span><?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getCountComment();?>
</span><?php if ($_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew()){?> <span class="new">+<?php echo $_smarty_tpl->tpl_vars['oTalkUserAuthor']->value->getCommentCountNew();?>
</span><?php }?>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTalk']->value->getUserIdLast()){?>
								<i class="icon-synio-arrow-right"></i>
							<?php }else{ ?>
								<i class="icon-synio-arrow-left"></i>
							<?php }?>
						</td>
						<td class="cell-date ta-r"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTalk']->value->getDate(),'format'=>"j F Y"),$_smarty_tpl);?>
</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</form>
<?php }else{ ?>
	<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_empty'];?>
</div>
<?php }?>

			
<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>