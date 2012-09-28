<div class="latest-topic-list">
	{foreach from=$oTopics item=oTopic name="cmt"}
		{assign var="oUser" value=$oTopic->getUser()}
		{assign var="oBlog" value=$oTopic->getBlog()}

		<div class="stream-topic-item">
		    <a href="{$oUser->getUserWebPath()}" class="author">{$oUser->getLogin()}</a>
             →
			<a href="{$oTopic->getUrl()}" class="stream-topic-title">{$oTopic->getTitle()|escape:'html'}</a>
            &nbsp;&nbsp;<span class="red-color"><i class="ico-comments"></i> {$oTopic->getCountComment()}</span>
            <div>{$oTopic->getText()|strip_tags|trim|truncate:150:'...'|escape:'html'}</div>
		</div>
	{/foreach}
</div>


<footer>
	<a href="{router page='index'}new/">{$aLang.block_stream_topics_all}</a> · <a href="{router page='rss'}new/">RSS</a>
</footer>
