<div class="modal fade" id="topicadd" data-target="#topicadd">
  <div class="modal-header">
    <h3>Создать</h3>
  </div>

	{strip}
	<div class="modal-body">
		<ul class="write-list">
			{if $iUserCurrentCountTopicDraft}
			<li class="write-item-type-draft">
				<a href="{router page='topic'}saved/" class="write-item-image"></a>
				<a href="{router page='topic'}saved/" class="write-item-link">{$iUserCurrentCountTopicDraft} {$iUserCurrentCountTopicDraft|declension:$aLang.draft_declension:'russian'}</a>
			</li>
			{/if}
			<li class="write-item-type-topic">
				<a href="{router page='topic'}add" class="write-item-image"></a>
				<a href="{router page='topic'}add" class="write-item-link">{$aLang.block_create_topic_topic}</a>
			</li>
			<li class="write-item-type-blog">
				<a href="{router page='blog'}add" class="write-item-image"></a>
				<a href="{router page='blog'}add" class="write-item-link">{$aLang.block_create_blog}</a>
			</li>
			<li class="write-item-type-message">
				<a href="{router page='talk'}add" class="write-item-image"></a>
				<a href="{router page='talk'}add" class="write-item-link">{$aLang.block_create_talk}</a>
			</li>
			<li class="write-item-type-topic">
				<a href="{router page='link'}add" class="write-item-image"></a>
				<a href="{router page='link'}add/">Видео</a>
            </li>
			<li class="write-item-type-topic">
				<a href="{router page='photoset'}add" class="write-item-image"></a>
				<a href="{router page='photoset'}add/">Расширение</a>
            </li>
			<li class="write-item-type-topic">
				<a href="{router page='question'}add" class="write-item-image"></a>
				<a href="{router page='question'}add/">{$aLang.topic_menu_add_question}</a>
            </li>
			{hook run='write_item' isPopup=true}
		</ul>
	</div>
	{/strip}
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
	