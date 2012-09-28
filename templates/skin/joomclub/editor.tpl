{if $oConfig->GetValue('view.tinymce')}
	{if !$sSettingsTinymce}
		{assign var="sSettingsTinymce" value="ls.settings.getTinymce()"}
	{/if}

	<script src="{cfg name='path.root.engine_lib'}/external/tinymce-jq/tiny_mce.js"></script>
	<script type="text/javascript">
		jQuery(function($){
			tinyMCE.init({$sSettingsTinymce});
		});
	</script>
{else}
	{if !$sImgToLoad}
		{assign var="sImgToLoad" value="topic_text"}
	{/if}
	{include file='window_load_img.tpl' sToLoad=$sImgToLoad}
	<script src="{cfg name='path.root.engine_lib'}/external/redactor/redactor.js"></script>
	<link rel="stylesheet" href="{cfg name='path.root.engine_lib'}/external/redactor/redactor.css" type="text/css" />
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
				imageUpload: '{cfg name='path.root.engine_lib'}/external/redactor/image_upload.php',
				fileUpload: '{cfg name='path.root.engine_lib'}/external/redactor/file_upload.php',
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
{/if}