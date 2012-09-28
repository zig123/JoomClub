<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:40
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352446663505bec08237628-77994152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b055f9995d7dd6f306f831a2a64c9bab685728d' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.blog.tpl',
      1 => 1347100651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352446663505bec08237628-77994152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'oBlog' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec08338546_91861020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec08338546_91861020')) {function content_505bec08338546_91861020($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_declension')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oTopic']->value){?>
  <?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
  <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()!='personal'){?>
  <section class="block-blog">
    <header><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"> → </a></h3></header>
    <div class="block-content">
      <span id="blog_user_count_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountUser();?>
</span> <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountUser(),$_smarty_tpl->tpl_vars['aLang']->value['reader_declension'],'russian');?>
<br />
      <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic(),$_smarty_tpl->tpl_vars['aLang']->value['topic_declension'],'russian');?>

	</div>
	<footer>
	  <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
	    <button type="submit"  class="btn btn-nostyle" id="blog-join" data-only-text="1" onclick="ls.blog.toggleJoin(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button> · 
	  <?php }?><a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/" class="btn btn-nostyle rss">RSS</a>
	</footer>
  </section>
  <?php }?>
<?php }?><?php }} ?>