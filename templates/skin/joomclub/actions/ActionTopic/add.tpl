{if $sEvent=='add'}
	{include file='header.tpl' menu_content='create'}
{else}
	{include file='header.tpl'}
	<h2 class="page-header">{$aLang.topic_topic_edit}</h2>
{/if}


{include file='editor.tpl'}


{hook run='add_topic_topic_begin'}


<form action="" method="POST" enctype="multipart/form-data" id="form-topic-add" class="wrapper-content">
	{hook run='form_add_topic_topic_begin'}

	
	<input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />

	
	<p><label for="blog_id">{$aLang.topic_create_blog}</label>
	<select name="blog_id" id="blog_id" onChange="ls.blog.loadInfo(jQuery(this).val());" class="input-width-full">
		<option value="0">{$aLang.topic_create_blog_personal}</option>
		{foreach from=$aBlogsAllow item=oBlog}
			<option value="{$oBlog->getId()}" {if $_aRequest.blog_id==$oBlog->getId()}selected{/if}>{$oBlog->getTitle()|escape:'html'}</option>
		{/foreach}
	</select>
    <br />
	<small class="note">{$aLang.topic_create_blog_notice}</small></p>

	
	<script type="text/javascript">
		jQuery(document).ready(function($){
			ls.blog.loadInfo($('#blog_id').val());
		});
    </script>
	
	
	<p><label for="topic_title">{$aLang.topic_create_title}:</label>
	<input type="text" id="topic_title" name="topic_title" value="{$_aRequest.topic_title}" class="input-text input-width-full span12" />
    </p>


	<p><label for="topic_tags">{$aLang.topic_create_tags} <small class="note">(разделитель - запята)</small>:</label>
	<input type="text" id="topic_tags" name="topic_tags" value="{$_aRequest.topic_tags}" class="input-text input-width-full autocomplete-tags-sep span12" />
	</p>



	{hook run='form_add_topic_topic_end'}

	<label for="topic_text">{$aLang.topic_create_text}:</label>
	{if $oConfig->GetValue('view.tinymce')}
    <textarea name="topic_text" id="topic_text" class="mce-editor markitup-editor input-width-full" rows="20">{$_aRequest.topic_text}</textarea>
	{else}
	<textarea name="topic_text" id="redactor" rows="20" class="input-text input-width-full">{$_aRequest.topic_text}</textarea>
	{/if}
	{if !$oConfig->GetValue('view.tinymce')}
		{include file='tags_help.tpl' sTagsTargetId="topic_text"}
	{/if}

	<p><label><input type="checkbox" id="topic_forbid_comment" name="topic_forbid_comment" class="input-checkbox" value="1" {if $_aRequest.topic_forbid_comment==1}checked{/if} />
	{$aLang.topic_create_forbid_comment}</label>
	<small class="note">{$aLang.topic_create_forbid_comment_notice}</small></p>


	{if $oUserCurrent->isAdministrator()}
		<p><label><input type="checkbox" id="topic_publish_index" name="topic_publish_index" class="input-checkbox" value="1" {if $_aRequest.topic_publish_index==1}checked{/if} />
		{$aLang.topic_create_publish_index}</label>
		<small class="note">{$aLang.topic_create_publish_index_notice}</small></p>
	{/if}

	<input type="hidden" name="topic_type" value="topic" />

	<div class="btn-group">
	  <button type="submit"  name="submit_topic_publish" id="submit_topic_publish" class="button button-primary fl-r btn btn-primary">{$aLang.topic_create_submit_publish}</button>
	  <button type="submit"  name="submit_preview" onclick="ls.topic.preview('form-topic-add','text_preview'); return false;" class="button btn btn-primary">{$aLang.topic_create_submit_preview}</button>
	  <button type="submit"  name="submit_topic_save" id="submit_topic_save" class="button btn btn-primary">{$aLang.topic_create_submit_save}</button>
    </div>
</form>

	
<div class="topic-preview" style="display: none;" id="text_preview"></div>


{hook run='add_topic_topic_end'}


{include file='footer.tpl'}