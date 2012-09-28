

{literal}
<script language="JavaScript" type="text/javascript">
    jQuery(document).ready(function($){
        ls.autocomplete.add($("#profile_prof"), aRouter['ajax']+'ajaxproflist/', false);
    });

    function profadd() {
        if($("#prof_list{/literal}{$postfix}{literal}").val()=='_full_prof_'){
            $("#prof_list{/literal}{$postfix}{literal}").css({display:'none'});
            $("#prof_list{/literal}{$postfix}{literal}").attr('name','');
            $("#prof_list_input{/literal}{$postfix}{literal}").css({display:'block'});
            $("#prof_list_input{/literal}{$postfix}{literal}").attr('name','profile_prof');
            $("#prof_list_input{/literal}{$postfix}{literal}").focus();
        }
    }
</script>
{/literal}

<dl class="form-item">
    <dt><label for="profile_prof">{$aLang.plugin.prof.prof}:</label></dt>
    <dd>
        {if !$_aRequest.profile_prof || ($_aRequest.profile_prof && in_array($_aRequest.profile_prof,$oConfig->GetValue('plugin.prof.profarr')))}
            <select id="prof_list{$postfix}" name="profile_prof" onchange="profadd();" class="input-width-250">
                {foreach from=$oConfig->GetValue('plugin.prof.profarr') item=oProf}
                    <option value="{$oProf}" {if $oProf==$_aRequest.profile_prof}selected{/if}>{$oProf}</option>
                {/foreach}
                <option value="_full_prof_" >- {$aLang.plugin.prof.prof_other} -</option>
            </select>
            <input type="text" class="input-text input-width-250" id="prof_list_input{$postfix}" style="display:none" />
        {elseif $_aRequest.profile_prof}
            <input type="text" name="profile_prof" class="input-text input-width-250" value="{$_aRequest.profile_prof}" />
        {/if}
    </dd>
</dl>