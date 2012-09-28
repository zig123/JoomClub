{if $aCountryList && count($aCountryList)>0}
<section class="countrylist">
  <header><h3>{$aLang.block_country_tags}</h3></header>
  <div class="block-content">
    {foreach from=$aCountryList item=oCountry}
      <a class="tag-size-{$oCountry->getSize()}" href="{router page='people'}country/{$oCountry->getId()}/">{$oCountry->getName()|escape:'html'}</a>
    {/foreach}
  </div>
</section>
{/if}