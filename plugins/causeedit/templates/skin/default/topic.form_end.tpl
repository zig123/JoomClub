{if $aCauses}
    <ul class="unstyled">
    {foreach from=$aCauses item=aCause name=c key=k}
        <li>
            - <span class="text">{$aCause.text}</span> -
            <span class="date">{date_format date=$aCause.date day="day H:i" format="j.F.Y"}</span>
            <span class="login">{$aCause.user_login}</span>
            {if $oUserCurrent and $oUserCurrent->isAdministrator()}
                <a href="#" onclick="deleteCause('{$iTopicId}', '{$k}', this); return false;" class="delete">{$aLang.topic_delete}</a>
            {/if}
        </li>
    {/foreach}
    </ul>
{/if}
<div class="control-group error">
  <label for="topic_cause_edit" class="control-label">{$aLang.plugin.causeedit.cause_title}:</label>
  <div class="controls">
    <input type="text" id="topic_cause_edit" name="topic_cause_edit" value="{$_aRequest.topic_cause_edit}" class="error span12" />
  </div>
</div>
