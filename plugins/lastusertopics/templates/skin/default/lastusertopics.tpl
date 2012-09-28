    {if $oLastTopics}
        <div class="profile-content">
          {foreach from=$oLastTopics item=oTopic name=nTopicCycle}
          <div class="content" {if $smarty.foreach.nTopicCycle.last}style="border-bottom: 0px solid #E8E8E8;"{/if}>
            <div class="box">
              <strong>
                {if $oTopic->getType()=='link'}
              <span class="date">{date_format date=$oTopic->getDateAdd()}</span>
                  <a href="{router page='link'}go/{$oTopic->getId()}/">{$oTopic->getTitle()|escape:'html'|truncate:50:'...'}</a>
                {else}
              <span class="date">{date_format date=$oTopic->getDateAdd()}</span>
                  <a href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'|truncate:50:'...'}</a>
                {/if}
              </strong>
              <p class="text">{$oTopic->getTextShort()|strip_tags|truncate:140:'...'}</p>
            </div>
          </div>
        {/foreach}
        </div>
    {/if}
