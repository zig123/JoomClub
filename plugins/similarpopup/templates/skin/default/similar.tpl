{if $aSimilarTopics}
  <div class="similar-topics">
    <h3>{$aLang.plugin.similarpopup.Title}</h3>
    {foreach from=$aSimilarTopics item=oTopic name=nTopicCycle}
      {assign var="oBlog" value=$oTopic->getBlog()}
      {assign var="oUser" value=$oTopic->getUser()}
      <div>
        {if $oTopic->getType()=='link'}
          <a class="topic_title" href="{router page='link'}go/{$oTopic->getId()}/">{$oTopic->getTitle()|escape:'html'}</a>
        {else}
          <a class="topic_title" href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'}</a>
        {/if}
      </div>
    {/foreach}
  </div>
{/if}