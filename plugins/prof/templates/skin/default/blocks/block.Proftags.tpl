{if $aTagList && count($aTagList)>0}
<section class="proflist">
  <header class="block-header"><h3>Специализации</h3></header>
  <div class="block-content">
    {foreach from=$aTagList item=aTag}
      <a class="tag-size-{$aTag.size}" href="{router page='people'}prof/{$aTag.name|escape:'html'}/">{$aTag.name|escape:'html'}</a><br />
    {/foreach}
  </div>
</section>
{/if}