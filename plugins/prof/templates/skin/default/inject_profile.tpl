{if $oUserProfile->getProfileProf()}
<li>
    <span>{$aLang.plugin.prof.prof}:</span>
    <strong><a href="{router page='people'}prof/{$oUserProfile->getProfileProf()|escape:'html'}">{$oUserProfile->getProfileProf()|escape:'html'}</a></strong>
</li>
{/if}