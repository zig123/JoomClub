{include file='topic_part_header.tpl'}


<div class="topic-content text">
	{hook run='topic_content_begin' topic=$oTopic bTopicList=$bTopicList}
	
	{$oTopic->getText()}
	
	{hook run='topic_content_end' topic=$oTopic bTopicList=$bTopicList}
</div> 
		

<div class="topic-url">
  <iframe width="100%" height="460" src="{$oTopic->getLinkUrl()}" frameborder="0" allowfullscreen></iframe>
</div>

{include file='topic_part_footer.tpl'}

