<div class="latest-comment-list">
	{foreach from=$aComments item=oComment name="cmt"}
		{assign var="oUser" value=$oComment->getUser()}
		{assign var="oTopic" value=$oComment->getTarget()}
		{assign var="oBlog" value=$oTopic->getBlog()}

		<div class="stream-comment-item">
            <div><a href="{if $oConfig->GetValue('module.comment.nested_per_page')}{router page='comments'}{else}{$oTopic->getUrl()}#comment{/if}{$oComment->getId()}" title="{$oTopic->getTitle()|escape:'html'}">{$oTopic->getTitle()|escape:'html'}</a></div>
			<i class="icon-user"></i>&nbsp;
            <a href="{$oUser->getUserWebPath()}" title="{$oUser->getLogin()}">{$oUser->getLogin()}</a>: <span>{$oComment->getText()|strip_tags|trim|truncate:100:'...'|escape:'html'}</span>
		</div>
	{/foreach}
</div>


<footer>
	<a href="{router page='comments'}">{$aLang.block_stream_comments_all}</a> · <a href="{router page='rss'}allcomments/">RSS</a>
</footer>