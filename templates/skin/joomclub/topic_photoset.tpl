{include file='topic_part_header.tpl'}


<script type="text/javascript">
	jQuery(window).load(function($) {
		ls.photoset.showMainPhoto({$oTopic->getId()});
	});
</script>

<div class="row-fluid">

{assign var=iPhotosCount value=$oTopic->getPhotosetCount()}
<div class="topic-content text">

{assign var=oMainPhoto value=$oTopic->getPhotosetMainPhoto()}
{if $oMainPhoto}
<div class="extensions-photo-preview thumbnail span4" id="photoset-main-preview-{$oTopic->getId()}" onclick="window.location='{$oTopic->getUrl()}#photoset'" style="margin-right: 20px">
	<img src="{$oMainPhoto->getWebPath(500)}" alt="{$oMainPhoto->getDescription()}" id="photoset-main-image-{$oTopic->getId()}" title="{$oMainPhoto->getDescription()}" />
</div>
{/if}

	{hook run='topic_content_begin' topic=$oTopic bTopicList=$bTopicList}

	{if $bTopicList}
		{$oTopic->getTextShort()}
	{else}
		{$oTopic->getText()}
	{/if}

	{hook run='topic_content_end' topic=$oTopic bTopicList=$bTopicList}
</div>
</div>

{if !$bTopicList}
	<script type="text/javascript" src="{cfg name='path.root.engine_lib'}/external/prettyPhoto/js/prettyPhoto.js"></script>
	<link rel='stylesheet' type='text/css' href="{cfg name='path.root.engine_lib'}/external/prettyPhoto/css/prettyPhoto.css" />
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
			{assign var=aPhotos value=$oTopic->getPhotosetPhotos(0, $oConfig->get('module.topic.photoset.per_page'))}
			{if count($aPhotos)}
				{foreach from=$aPhotos item=oPhoto}
                  {if $oPhoto->getWebPath('500')!=$oMainPhoto->getWebPath(500)}
					<li class="span2"><a class="photoset-image thumbnail" href="{$oPhoto->getWebPath(1000)}" rel="[photoset]"  title="{$oPhoto->getDescription()}"><img src="{$oPhoto->getWebPath('100crop')}" alt="{$oPhoto->getDescription()}" width="100%" /></a></li>
					{assign var=iLastPhotoId value=$oPhoto->getId()}
                  {/if}
				{/foreach}
			{/if}
			<script type="text/javascript">
				ls.photoset.idLast='{$iLastPhotoId}';
			</script>
		</ul>

		{if count($aPhotos)<$oTopic->getPhotosetCount()}
			<a href="javascript:ls.photoset.getMore({$oTopic->getId()})" id="topic-photo-more" class="topic-photo-more">{$aLang.topic_photoset_show_more} &darr;</a>
		{/if}
	</div>
{/if}

{if $oTopic->getLinkUrl()}
  <a href="{$oTopic->getLinkUrl()}">Скачать</a>
{/if}
{include file='topic_part_footer.tpl'}