<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 15:06:28
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:486580734505be559e5aeb2-07419836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b6b1bad4f1f7933eb2ab8734c6d76a99ff0be3' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/editor.tpl',
      1 => 1348311984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486580734505be559e5aeb2-07419836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be559ea9ee3_52031880',
  'variables' => 
  array (
    'oConfig' => 0,
    'sSettingsTinymce' => 0,
    'sImgToLoad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be559ea9ee3_52031880')) {function content_505be559ea9ee3_52031880($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?><?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<?php if (!$_smarty_tpl->tpl_vars['sSettingsTinymce']->value){?>
		<?php $_smarty_tpl->tpl_vars["sSettingsTinymce"] = new Smarty_variable("ls.settings.getTinymce()", null, 0);?>
	<?php }?>

	<script src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/tinymce-jq/tiny_mce.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			tinyMCE.init(<?php echo $_smarty_tpl->tpl_vars['sSettingsTinymce']->value;?>
);
		});
	</script>
<?php }else{ ?>
	<?php if (!$_smarty_tpl->tpl_vars['sImgToLoad']->value){?>
		<?php $_smarty_tpl->tpl_vars["sImgToLoad"] = new Smarty_variable("topic_text", null, 0);?>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ('window_load_img.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sToLoad'=>$_smarty_tpl->tpl_vars['sImgToLoad']->value), 0);?>

	<script src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/redactor/redactor.js"></script>
	<link rel="stylesheet" href="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/redactor/redactor.css" type="text/css" />
	<script type="text/javascript"> 
	$(document).ready(

		function()
		{   
			
		    var toolbarPrimary = [
			'bold',		
			'italic',
			'underline',
			'deleted',
			'fontcolor','|',
			'alignleft',
			'aligncenter',
			'alignright',
			'justify','|',
			'unorderedlist',
			'orderedlist',
			'outdent',
			'indent','|',
			'link',
			'image',
			'file',
			'video',
			'table','|',
			'formatting','|',
			'horizontalrule',
			'ls',
            'cut',
            'quote',
			'pre','|',
			'html'		
			];
			
			var toolbarComments = [
			'bold',		
			'italic',
			'deleted',
			'fontcolor',
			'link',		
			'quote',
			'pre',
			'ls','|',
            'html'			
			];
			
			$('#redactor').redactor({
			    wym: true,
				//minHeight: 200,
				autoresize: false,
				colors: ['black', 'red', 'yellow', 'green', 'navy', 'orange', 'blue', 'teal', 'gray', 'maroon', 'brown'],
				imageUpload: '<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/redactor/image_upload.php',
				fileUpload: '<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/redactor/file_upload.php',
				buttons: toolbarPrimary,
				buttonsCustom: {
				    cut: {
						title: 'Вставить разрыв страницы', 
						callback: function(obj)
						{
							obj.execCommand('inserthtml', '<cut>');
						}                    
					},
				    quote: {
						title: 'Вставить цитату', 
						callback: function(obj)
						{
							obj.execCommand('inserthtml', '<blockquote>цитата</blockquote><br />');
						}                    
					}
				}
			});
			
			$('#redactorComments').redactor({
				minHeight: 100,
				autoresize: false,
				colors: ['black', 'red', 'yellow', 'green', 'navy', 'orange', 'blue', 'teal', 'gray', 'maroon', 'brown'],
				buttons: toolbarComments,
				buttonsCustom: {
				    cut: {
						title: 'Вставить разрыв страницы', 
						callback: function(obj)
						{
							obj.execCommand('inserthtml', '<cut>');
						}                    
					},
				    quote: {
						title: 'Вставить цитату', 
						callback: function(obj)
						{
							obj.execCommand('inserthtml', '<blockquote>цитата</blockquote><br />');
						}                    
					}
				}
			});		
		}
	);
	</script>	
<?php }?><?php }} ?>