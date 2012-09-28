<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:02
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_part_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2139946733505be4dac9ab52-74885462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd769c1b1e9528a2ae5a9d9784204c951872c6a5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_part_header.tpl',
      1 => 1347100649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139946733505be4dac9ab52-74885462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
    'oBlog' => 0,
    'oUserCurrent' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4dada15f7_07203825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4dada15f7_07203825')) {function content_505be4dada15f7_07203825($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>


<article class="topic">
	<header class="topic-header">
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
				<h2 class="topic-title word-wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h2>
			<?php }else{ ?>
				<h1 class="topic-title word-wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</h1>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getPublish()==0){?>   
				<i class="icon-synio-topic-draft" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_unpublish'];?>
"></i>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?> 
				<i class="icon-synio-topic-link" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_link'];?>
"></i>
			<?php }?>

		
		
		<div class="topic-info">
			<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()!='personal'){?><a href="#" class="blog-list-info" onclick="return ls.infobox.showInfoBlog(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
);"></a><?php }?>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsModerator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
			<div class="btn-group" style="margin-top: 10px; margin-bottom: 10px">
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsModerator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
" class="actions-edit btn btn-primary"><i class="icon-pencil icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
</a>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete_confirm'];?>
');" class="actions-delete btn btn-primary"><i class="icon-trash icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
</a>
				<?php }?>
			</div>
		<?php }?>
	</header><?php }} ?>