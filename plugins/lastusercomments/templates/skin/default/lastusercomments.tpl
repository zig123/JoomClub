{if $oLastComments}
  <div class="profile-content">
  {foreach from=$oLastComments item=oComment name=nCommentCycle}
    {assign var="oTopic" value=$oComment->getTarget()}
    <div class="content" {if $smarty.foreach.nCommentCycle.last}style="border-bottom: 0px solid #E8E8E8;"{/if}>
                <div class="box">
                  <strong>
                    <a href="{if $oConfig->GetValue('module.comment.nested_per_page')}{router page='comments'}{else}{$oTopic->getUrl()}#comment{/if}{$oComment->getId()}" {if $smarty.foreach.nCommentCycle.iteration % 2 == 0}class="even"{/if}>{$oTopic->getTitle()}</a>
                  </strong>

                  <span class="date">{date_format date=$oComment->getDate()}</span>
                  <p class="text">{$oComment->getText()|truncate:200:'...'}</p>
                </div>
            </div>
          {/foreach}
        </div>
    {/if}