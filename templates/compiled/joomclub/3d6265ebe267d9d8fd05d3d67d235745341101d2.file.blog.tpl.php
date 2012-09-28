<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:59:05
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionBlog/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1405904356505be6093c7dd5-42368677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6265ebe267d9d8fd05d3d67d235745341101d2' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/actions/ActionBlog/blog.tpl',
      1 => 1347111988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405904356505be6093c7dd5-42368677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBlog' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aBlogs' => 0,
    'oBlogDelete' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sMenuSubItemSelect' => 0,
    'sMenuSubBlogUrl' => 0,
    'iCountTopicsBlogNew' => 0,
    'oUserOwner' => 0,
    'aBlogAdministrators' => 0,
    'oBlogUser' => 0,
    'oUser' => 0,
    'aBlogModerators' => 0,
    'sPeriodSelectCurrent' => 0,
    'sPeriodSelectRoot' => 0,
    'bCloseBlog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be6096150c5_53714625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be6096150c5_53714625')) {function content_505be6096150c5_53714625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang_load')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getOwner(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getVote(), null, 0);?>


<script type="text/javascript">
	jQuery(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog_fold_info,blog_expand_info"),$_smarty_tpl);?>
);
	});
</script>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<div class="modal fade" id="blogdelete" data-target="#blogdelete">
  <div class="modal-header">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_title'];?>
</h3>
  </div>
  <div class="modal-body">


		<form action="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" method="POST" class="modal-content">
			<p><label for="topic_move_to"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_move'];?>
:</label>
			<select name="topic_move_to" id="topic_move_to" class="input-width-full">
				<option value="-1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete_clear'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aBlogs']->value){?>
					<optgroup label="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
">
						<?php  $_smarty_tpl->tpl_vars['oBlogDelete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogDelete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogDelete']->key => $_smarty_tpl->tpl_vars['oBlogDelete']->value){
$_smarty_tpl->tpl_vars['oBlogDelete']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['oBlogDelete']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogDelete']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</optgroup>
				<?php }?>
			</select></p>

			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" name="security_ls_key" />
			<button type="submit"  class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</button>
		</form>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
<?php }?>


<div class="blog-top">
	<h2 class="page-header">
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
&nbsp;→&nbsp;</span>
	  <span class="btn-group">
		<a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>active <?php }?>btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_good'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value>0){?><a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>active <?php }?>btn btn-primary new" href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_new'];?>
 +<?php echo $_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value;?>
</a><?php }?>
		<a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>active <?php }?>btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_discussed'];?>
</a>
		<a class="<?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>active <?php }?>btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_top'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
		  <button type="submit"  class="btn btn-primary" id="button-blog-join-first-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-button-additional="button-blog-join-second-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-only-text="1" onclick="ls.blog.toggleJoin(this, <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button>
		<?php }?>
		<a class="btn btn-primary" href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/">RSS</a>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

	  </span>
      </h2>
      <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?> <i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon-synio-topic-private"></i><?php }?>
        <span class="btn-group">
	      <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator())){?>
            <a data-toggle="modal" href="#blogdelete" class="btn btn-primary">Удалить блог</a>
	        <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
" class="edit btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
</a>
		    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
		      <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" id="blog_delete_show" class="delete btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
		    <?php }else{ ?>
		      <a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_confirm'];?>
');"  class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
		    <?php }?>
	      <?php }?>
        </span>
</div>

<div id="bloginfo" class="accordion">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a href="#bloginfo-onetab" data-parent="#bloginfo" data-toggle="collapse" class="accordion-toggle"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_expand_info'];?>
</a>
    </div>
    <div class="accordion-body collapse" id="bloginfo-onetab">
      <div class="accordion-inner">
		<div class="blog-content">
			<p class="blog-description"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getDescription();?>
</p>
			<?php echo smarty_function_hook(array('run'=>'blog_info_begin','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_administrators'];?>
:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getLogin();?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['aBlogAdministrators']->value){?>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogAdministrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<?php } ?>
			<?php }?>
            <br /><br />
			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators'];?>
:</strong>
			<?php if ($_smarty_tpl->tpl_vars['aBlogModerators']->value){?>
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogModerators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<?php } ?>
			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators_empty'];?>

			<?php }?>
			<?php echo smarty_function_hook(array('run'=>'blog_info_end','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

		</div>
      </div>
    </div>
  </div>
</div>


<?php echo smarty_function_hook(array('run'=>'blog_info','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>



	<?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value){?>
		<ul class="nav nav-pills nav-pills-dropdown">
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='1'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='7'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=7"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_7d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='30'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=30"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_30d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='all'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=all"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
</a></li>
		</ul>
	<?php }?>




<?php if ($_smarty_tpl->tpl_vars['bCloseBlog']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_close_show'];?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>