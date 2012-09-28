<section class="block block-type-tags">
	<div class="block-content">
		<div class="js-block-tags-content" data-type="all">
			{if $aTags}
					{foreach from=$aTags item=oTag}
						<a class="tag-size-{$oTag->getSize()}" href="{router page='tag'}{$oTag->getText()|escape:'url'}/">{$oTag->getText()|escape:'html'}</a>
					{/foreach}
			{else}
				<div class="notice-empty">{$aLang.block_tags_empty}</div>
			{/if}
		</div>

	</div>
</section>