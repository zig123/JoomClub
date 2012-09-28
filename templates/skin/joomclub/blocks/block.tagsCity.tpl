{if $aCityList && count($aCityList)>0}
<section class="citylist">
 <header><h3>{$aLang.block_city_tags}</h3></header>
 <div class="block-content">
   {foreach from=$aCityList item=oCity}
     <a class="tag-size-{$oCity->getSize()}" href="{router page='people'}city/{$oCity->getId()}/">{$oCity->getName()|escape:'html'}</a>
   {/foreach}
 </div>
</section>
{/if}