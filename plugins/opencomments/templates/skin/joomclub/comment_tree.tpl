{add_block group='toolbar' name='toolbar_comment.tpl'
	aPagingCmt=$aPagingCmt
	iTargetId=$iTargetId
	sTargetType=$sTargetType
	iMaxIdComment=$iMaxIdComment
}

{hook run='comment_tree_begin' iTargetId=$iTargetId sTargetType=$sTargetType}

<div class="comments" id="comments">
	<header class="comments-header">
		<h3>{$iCountComment} {$iCountComment|declension:$aLang.comment_declension:'russian'}</h3>
		
		{if $bAllowSubscribe and $oUserCurrent}
			<div class="subscribe">
				<label for="checkbox inline">
                  <input {if $oSubscribeComment and $oSubscribeComment->getStatus()}checked="checked"{/if} type="checkbox" id="comment_subscribe" class="input-checkbox" onchange="ls.subscribe.toggle('{$sTargetType}_new_comment','{$iTargetId}','',this.checked);">
				  {$aLang.comment_subscribe}
                </label>
			</div>
		{/if}
	
		<a name="comments"></a>
	</header>

	{assign var="nesting" value="-1"}
	{foreach from=$aComments item=oComment name=rublist}
		{assign var="cmtlevel" value=$oComment->getLevel()}
		
		{if $cmtlevel>$oConfig->GetValue('module.comment.max_tree')}
			{assign var="cmtlevel" value=$oConfig->GetValue('module.comment.max_tree')}
		{/if}
		
		{if $nesting < $cmtlevel} 
		{elseif $nesting > $cmtlevel}    	
			{section name=closelist1  loop=$nesting-$cmtlevel+1}</div>{/section}
		{elseif not $smarty.foreach.rublist.first}
			</div>
		{/if}
		
		<div class="comment-wrapper" id="comment_wrapper_id_{$oComment->getId()}">
		
		{include file='comment.tpl'} 
		{assign var="nesting" value=$cmtlevel}
		{if $smarty.foreach.rublist.last}
			{section name=closelist2 loop=$nesting+1}</div>{/section}    
		{/if}
	{/foreach}
</div>				
	
	
{include file='comment_paging.tpl' aPagingCmt=$aPagingCmt}

{hook run='comment_tree_end' iTargetId=$iTargetId sTargetType=$sTargetType}

{if $bAllowNewComment}
	{$sNoticeNotAllow}
{else}



		<h4 class="reply-header" id="comment_id_0">
			<a href="#" class="link-dotted" onclick="ls.comments.toggleCommentForm(0); return false;">{$sNoticeCommentAdd}</a>
		</h4>

    {if $oUserCurrent}
    {include file='editor.tpl' sImgToLoad='form_comment_text' sSettingsTinymce='ls.settings.getTinymceComment()' sSettingsMarkitup='ls.settings.getMarkitupComment()'}

    <div id="reply" class="reply">
			<form method="post" id="form_comment" onsubmit="return false;" enctype="multipart/form-data">
				{hook run='form_add_comment_begin'}
				{if $oConfig->GetValue('view.tinymce')}
				<textarea name="comment_text" id="form_comment_text" class="mce-editor markitup-editor input-width-full"></textarea>
				{else}
				<textarea name="comment_text" id="redactorComments" class="mce-editor input-width-full"></textarea>
				{/if}
				
				{hook run='form_add_comment_end'}
                <div id="notifier" class="error"></div>
                <div class="btn-group">
				<button type="submit"  name="submit_comment"
						id="comment-button-submit"
						onclick="ls.comments.add('form_comment',{$iTargetId},'{$sTargetType}'); return false;"
						class="btn btn-primary">{$aLang.comment_add}</button>
				<button type="button" onclick="ls.comments.preview();" class="btn btn-primary">{$aLang.comment_preview}</button>
                </div>
				<input type="hidden" name="reply" value="0" id="form_comment_reply" />
				<input type="hidden" name="cmt_target_id" value="{$iTargetId}" />
			</form>
		</div>

	{else}

    <div id="reply" class="reply">
        <br />
        <form action="" method="POST" id="form_comment" onsubmit="return false;" enctype="multipart/form-data">
            <div class="comment-preview" id="comment_preview_0" style="display: none;">
                <div class="comment-inner">
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="span6">
                <input type="text" name="guest_name" id="guest_name" value="" class="span10" placeholder="{$aLang.plugin.opencomments.opencomments_name}" />
            </div>

            {if $oConfig->GetValue('opencomments.ask_mail')}
                <div class="span6 control-label">
                    <input type="text" name="guest_email" value="" class="span10" placeholder="{$aLang.plugin.opencomments.opencomments_mail}"/>
                </div>
            {/if}
            <span class="span12 control-label">{$aLang.plugin.opencomments.opencomments_title}</span><br />

            {hook run='form_add_comment_begin'}
            <textarea name="comment_text" id="form_comment_text" class="mce-editor markitup-editor input-width-full"></textarea>
            {hook run='form_add_comment_end'}
            <input type="hidden" name="reply" value="0" id="form_comment_reply" />
            <input type="hidden" name="cmt_target_id" value="{$iTargetId}" />

            {hook run='form_add_comment_end'}

            <div style="padding-top:15px;">
                {$aLang.plugin.opencomments.opencomments_captcha}<br />
                <img src="{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}" name="commentCaptcha" onclick="this.src='{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}&n='+Math.random();"><br />
                <input type="text" style="text-align: center;" name="captcha" value="" size="9">
            </div>
            <div id="notifier" class="error"></div>
            <div class="btn-group">
                <button type="submit"  name="submit_comment"
                        id="comment-button-submit"
                        onclick="ls.comments.add('form_comment',{$iTargetId},'{$sTargetType}'); return false;"
                        class="btn btn-primary">{$aLang.comment_add}</button>
                <button type="button" onclick="ls.comments.preview();" class="btn btn-primary">{$aLang.comment_preview}</button>
            </div>


        </form>
    </div>
	{/if}
{/if}	


