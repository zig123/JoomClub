<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 14:24:17
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_photoset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1864622933505c4051db7fd4-64801328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33604812aa400e1c5ba87dc73df63972e5341380' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/topic_photoset.tpl',
      1 => 1347651457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864622933505c4051db7fd4-64801328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'oMainPhoto' => 0,
    'bTopicList' => 0,
    'oConfig' => 0,
    'aPhotos' => 0,
    'oPhoto' => 0,
    'iLastPhotoId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505c4052015dc9_11377394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c4052015dc9_11377394')) {function content_505c4052015dc9_11377394($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?><?php echo $_smarty_tpl->getSubTemplate ('topic_part_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
	jQuery(window).load(function($) {
		ls.photoset.showMainPhoto(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
);
	});
</script>

<div class="row-fluid">

<?php $_smarty_tpl->tpl_vars['iPhotosCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getPhotosetCount(), null, 0);?>
<div class="topic-content text">

<?php $_smarty_tpl->tpl_vars['oMainPhoto'] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getPhotosetMainPhoto(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['oMainPhoto']->value){?>
<div class="extensions-photo-preview thumbnail span4" id="photoset-main-preview-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#photoset'" style="margin-right: 20px">
	<img src="<?php echo $_smarty_tpl->tpl_vars['oMainPhoto']->value->getWebPath(500);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oMainPhoto']->value->getDescription();?>
" id="photoset-main-image-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oMainPhoto']->value->getDescription();?>
" />
</div>
<?php }?>

	<?php echo smarty_function_hook(array('run'=>'topic_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getTextShort();?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>

	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'topic_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

</div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['bTopicList']->value){?>
	<script type="text/javascript" src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/prettyPhoto/js/prettyPhoto.js"></script>
	<link rel='stylesheet' type='text/css' href="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/prettyPhoto/css/prettyPhoto.css" />
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.photoset-image').prettyPhoto({
				social_tools:'',
				show_title: false,
				slideshow:false,
				deeplinking: false
			});
		});
	</script>


	<div class="topic-photo-images">
      <h3>Скриншоты:</h3>
		<a name="photoset"></a>

		<ul id="topic-photo-images" class="thumbnails">
			<?php $_smarty_tpl->tpl_vars['aPhotos'] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getPhotosetPhotos(0,$_smarty_tpl->tpl_vars['oConfig']->value->get('module.topic.photoset.per_page')), null, 0);?>
			<?php if (count($_smarty_tpl->tpl_vars['aPhotos']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['oPhoto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oPhoto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPhotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oPhoto']->key => $_smarty_tpl->tpl_vars['oPhoto']->value){
$_smarty_tpl->tpl_vars['oPhoto']->_loop = true;
?>
                  <?php if ($_smarty_tpl->tpl_vars['oPhoto']->value->getWebPath('500')!=$_smarty_tpl->tpl_vars['oMainPhoto']->value->getWebPath(500)){?>
					<li class="span2"><a class="photoset-image thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['oPhoto']->value->getWebPath(1000);?>
" rel="[photoset]"  title="<?php echo $_smarty_tpl->tpl_vars['oPhoto']->value->getDescription();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oPhoto']->value->getWebPath('100crop');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oPhoto']->value->getDescription();?>
" width="100%" /></a></li>
					<?php $_smarty_tpl->tpl_vars['iLastPhotoId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oPhoto']->value->getId(), null, 0);?>
                  <?php }?>
				<?php } ?>
			<?php }?>
			<script type="text/javascript">
				ls.photoset.idLast='<?php echo $_smarty_tpl->tpl_vars['iLastPhotoId']->value;?>
';
			</script>
		</ul>

		<?php if (count($_smarty_tpl->tpl_vars['aPhotos']->value)<$_smarty_tpl->tpl_vars['oTopic']->value->getPhotosetCount()){?>
			<a href="javascript:ls.photoset.getMore(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
)" id="topic-photo-more" class="topic-photo-more"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_photoset_show_more'];?>
 &darr;</a>
		<?php }?>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getLinkUrl()){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getLinkUrl();?>
">Скачать</a>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('topic_part_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>