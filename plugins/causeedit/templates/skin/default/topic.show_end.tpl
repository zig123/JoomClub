{assign var="aCauses" value=$oTopic->getCauseArray()}
{if $aCauses}
    <strong>{$aLang.plugin.causeedit.causes_title}</strong>
    <ul class="unstyled">
    {foreach from=$aCauses item=aCause name=c key=k}
        <li>
            - <span class="text">{$aCause.text}</span> -
            <span class="login">{$aCause.user_login}</span>
            {if $oUserCurrent and $oUserCurrent->isAdministrator()}
                <a href="#" onclick="deleteCause('{$iTopicId}', '{$k}', this); return false;" class="delete">{$aLang.topic_delete}</a>
            {/if}
        </li>
    {/foreach}
    </ul>
{/if}
