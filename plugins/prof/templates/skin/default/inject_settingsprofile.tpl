{literal}
<script language="JavaScript" type="text/javascript">
    jQuery(document).ready(function($){
        ls.autocomplete.add($("#profile_prof"), aRouter['ajax']+'ajaxproflist/', false);
    });
</script>
{/literal}

<dl class="form-item">
    <dt><label for="profile_prof">{$aLang.plugin.prof.prof}:</label></dt>
    <dd>
        {if !$_aRequest.profile_prof || ($_aRequest.profile_prof && in_array($_aRequest.profile_prof,$oConfig->GetValue('plugin.prof.profarr')))}
            <select id="prof_list{$postfix}" name="profile_prof" onchange="profadd();" class="input-width-250">
                {foreach from=$oConfig->GetValue('plugin.prof.profarr') item=oProf}
                    <option value="{$oProf}" {if $oProf==$oUserProfile->getProfileProf()}selected{/if}>{$oProf}</option>
                {/foreach}
            </select>
            <input type="text" class="input-text input-width-250" id="prof_list_input{$postfix}" style="display:none" />
        {elseif $_aRequest.profile_prof}
            <input type="text" name="profile_prof" class="input-text input-width-250" value="{$_aRequest.profile_prof}" />
        {/if}
    </dd>
</dl>