{include file='topic_part_header.tpl'}

	{hook run='topic_content_begin' topic=$oTopic bTopicList=$bTopicList}
	{if $bTopicList}
      <div class="short-text">
		{$oTopic->getTextShort()}
        <div class="cls"></div>
		{if $oTopic->getTextShort()!=$oTopic->getText()}
			<a href="{$oTopic->getUrl()}#cut" title="{$aLang.topic_read_more}" class="btn btn-primary" style="margin-top: 10px; margin-bottom: 10px">{if $oTopic->getCutText()}{$oTopic->getCutText()}{else}{$aLang.topic_read_more} &rarr; {/if}</a>
		{/if}
      </div>
	{else}
      <div class="full-text">
		{$oTopic->getText()}
      </div>
	{/if}
	{hook run='topic_content_end' topic=$oTopic bTopicList=$bTopicList}
{include file='topic_part_footer.tpl'}
