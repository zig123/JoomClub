<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:31:18
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsFavouriteTopic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:371820521505bed96062d46-13524420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b978893986d4bd2d4428598c8b9f88e96ca432' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.tagsFavouriteTopic.tpl',
      1 => 1347100652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '371820521505bed96062d46-13524420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aFavouriteTopicTags' => 0,
    'oTag' => 0,
    'sFavouriteTag' => 0,
    'oFavouriteUser' => 0,
    'aFavouriteTopicUserTags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bed9613a564_88678872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bed9613a564_88678872')) {function content_505bed9613a564_88678872($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><section class="talk-search talk-friends">
	<header>
		<a href="#" class="link-dotted close" onclick="ls.talk.toggleSearchForm(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_favourite_tags_block'];?>
</a>
	</header>
	
	
	<div class="talk-search-content" id="block_favourite_topic_content">
		<ul class="nav nav-pills">
			<li class="active js-block-favourite-topic-tags-item" data-type="all"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_favourite_tags_block_all'];?>
</a></li>
			<li class="js-block-favourite-topic-tags-item" data-type="user"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_favourite_tags_block_user'];?>
</a></li>

			<?php echo smarty_function_hook(array('run'=>'block_favourite_topic_tags_nav_item'),$_smarty_tpl);?>

		</ul>
		
		
		<div class="js-block-favourite-topic-tags-content" data-type="all">
			<?php if ($_smarty_tpl->tpl_vars['aFavouriteTopicTags']->value){?>
				<ul class="tag-cloud word-wrap">
					<?php  $_smarty_tpl->tpl_vars['oTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFavouriteTopicTags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTag']->key => $_smarty_tpl->tpl_vars['oTag']->value){
$_smarty_tpl->tpl_vars['oTag']->_loop = true;
?>
						<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getSize();?>
 <?php if ($_smarty_tpl->tpl_vars['sFavouriteTag']->value==$_smarty_tpl->tpl_vars['oTag']->value->getText()){?>tag-current<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getCount();?>
" href="<?php echo $_smarty_tpl->tpl_vars['oFavouriteUser']->value->getUserWebPath();?>
favourites/topics/tag/<?php echo rawurlencode($_smarty_tpl->tpl_vars['oTag']->value->getText());?>
/"><?php echo $_smarty_tpl->tpl_vars['oTag']->value->getText();?>
</a></li>
					<?php } ?>
				</ul>
			<?php }else{ ?>
				<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_empty'];?>
</div>
			<?php }?>
		</div>
		
		<div class="js-block-favourite-topic-tags-content" data-type="user" style="display: none;">
			<?php if ($_smarty_tpl->tpl_vars['aFavouriteTopicUserTags']->value){?>
				<ul class="tag-cloud word-wrap">
					<?php  $_smarty_tpl->tpl_vars['oTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aFavouriteTopicUserTags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTag']->key => $_smarty_tpl->tpl_vars['oTag']->value){
$_smarty_tpl->tpl_vars['oTag']->_loop = true;
?>
						<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getSize();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getCount();?>
" href="<?php echo $_smarty_tpl->tpl_vars['oFavouriteUser']->value->getUserWebPath();?>
favourites/topics/tag/<?php echo rawurlencode($_smarty_tpl->tpl_vars['oTag']->value->getText());?>
/"><?php echo $_smarty_tpl->tpl_vars['oTag']->value->getText();?>
</a></li>
					<?php } ?>
				</ul>
			<?php }else{ ?>
				<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_empty'];?>
</div>
			<?php }?>
		</div>
	</div>
</section><?php }} ?>