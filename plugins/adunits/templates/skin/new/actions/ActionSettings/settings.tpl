{include file='header.tpl' menu='settings' showWhiteBack=true}

<script type="text/javascript" src="{$sTemplateWebPathPlugin}js/js.js"></script>

<h1>{$aLang.adunits_menu_settings_title}</h1>

<h5><a href="#" onclick="lsAdTree.toggle(0); return false;">{$aLang.adunits_menu_settings_add_title}</a></h5>
<div class="adunits profile-user" id="popup_adunits_form_0" style="display: none;">

    <form action="{router page='settings'}adunits/add/" method="post">
	<input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />
	<p>
	    <label for="adunits_code">{$aLang.adunits_menu_settings_code_title}</label><br />
	    <textarea name="adunits_code" style="height: 50px; width: 99%;">{$_aRequest.adunits_code}</textarea>
	</p>

	<p>
	    <label for="adunits_setting_viev_1">{$aLang.adunits_menu_settings_viev}</label><br />
	    <select name="adunits_setting_viev_1">
		<option value="h"{if $_aRequest.adunits_setting_viev_1 == 'h'} selected{/if}>{$aLang.adunits_menu_settings_viev_h}</option>
		<option value="f"{if $_aRequest.adunits_setting_viev_1 == 'f'} selected{/if}>{$aLang.adunits_menu_settings_viev_f}</option>
		<option value="cbb"{if $_aRequest.adunits_setting_viev_1 == 'cbb'} selected{/if}>{$aLang.adunits_menu_settings_viev_cbb}</option>
		<option value="cbe"{if $_aRequest.adunits_setting_viev_1 == 'cbe'} selected{/if}>{$aLang.adunits_menu_settings_viev_cbe}</option>
		<option value="bl"{if $_aRequest.adunits_setting_viev_1 == 'bl'} selected{/if}>{$aLang.adunits_menu_settings_viev_bl}</option>
{*	<option value="b"{if $_aRequest.adunits_setting_viev_1 == 'b'} selected{/if}>{$aLang.adunits_menu_settings_viev_b}</option>
		<option value="c"{if $_aRequest.adunits_setting_viev_1 == 'c'} selected{/if}>{$aLang.adunits_menu_settings_viev_c}</option>
		<option value="t"{if $_aRequest.adunits_setting_viev_1 == 't'} selected{/if}>{$aLang.adunits_menu_settings_viev_t}</option> *}
	    </select>
	</p>

	<p class="buttons" align="right">
	    <input type="submit" name="submit_adunits_add" value="{$aLang.adunits_submit_add}" class="right" /><br />    <br />
	    <a href="#" onclick="lsAdTree.toggle(0); return false;" style="color: red; clear: both;">{$aLang.adunits_fohm_hide}</a>
	</p>

    </form>

</div>
<br /><br />
{if count($aAdunits)}
    
    <h1>{$aLang.adunits_menu_settings_title_list}</h1>
    {foreach from=$aAdunits item=oAdunits name="amt"}
	<div id="au_{$oAdunits->getAdunitsId()}">
	    Блок {$smarty.foreach.amt.iteration}
	    <a href="#" onclick="lsAdTree.toggle({$oAdunits->getAdunitsId()}); return false;"><img src="{$sTemplateWebPathPlugin}img/edit.png" alt="{$aLang.adunits_menu_settings_edit_title}" title="{$aLang.adunits_menu_settings_edit_title}" /> {$aLang.adunits_menu_settings_edit_title}</a>
	    <a href="#" onclick="lsAdTree.del('{$oAdunits->getAdunitsId()|escape:'html'}'); return false;" style="text-decoration: none; color: red;"><img src="{$sTemplateWebPathPlugin}img/delete.png" alt="{$aLang.adunits_menu_settings_delete}" title="{$aLang.adunits_menu_settings_delete}" /> {$aLang.adunits_menu_settings_dellete_title}</a>
	    <div id="popup_adunits_form_{$oAdunits->getAdunitsId()}" style="display: none;">
		{$oAdunits->getAdunitsCode()}<br />
		<form action="" method="post" enctype="multipart/form-data" name="adunits_form_{$oAdunits->getAdunitsId()}" id="adunits_form_{$oAdunits->getAdunitsId()}" onsubmit="return false">

		    <input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />
		    <input type="hidden" name="adunits_id" value="{$oAdunits->getAdunitsId()}" />
		    <p>
			<label for="adunits_code">{$aLang.adunits_menu_settings_code_title}</label><br />
			<textarea name="adunits_code" class="form-code" style="height: 50px; width: 99%;">{$oAdunits->getAdunitsCode()}</textarea>
		    </p>

		    <p>
			<label for="adunits_setting_viev_1">{$aLang.adunits_menu_settings_viev}</label><br />
			<select name="adunits_setting_viev_1">
			    <option value="h"{if $oAdunits->getAdunitsSetting() == 'h'} selected{/if}>{$aLang.adunits_menu_settings_viev_h}</option>
			    <option value="f"{if $oAdunits->getAdunitsSetting() == 'f'} selected{/if}>{$aLang.adunits_menu_settings_viev_f}</option>
			    <option value="cbb"{if $oAdunits->getAdunitsSetting() == 'cbb'} selected{/if}>{$aLang.adunits_menu_settings_viev_cbb}</option>
			    <option value="cbe"{if $oAdunits->getAdunitsSetting() == 'cbe'} selected{/if}>{$aLang.adunits_menu_settings_viev_cbe}</option>
			    <option value="bl"{if $oAdunits->getAdunitsSetting() == 'bl'} selected{/if}>{$aLang.adunits_menu_settings_viev_bl}</option>
			{*  <option value="b"{if $oAdunits->getAdunitsSetting() == 'b'} selected{/if}>{$aLang.adunits_menu_settings_viev_b}</option>
			    <option value="c"{if $oAdunits->getAdunitsSetting() == 'c'} selected{/if}>{$aLang.adunits_menu_settings_viev_c}</option>
			    <option value="t"{if $oAdunits->getAdunitsSetting() == 't'} selected{/if}>{$aLang.adunits_menu_settings_viev_t}</option> *}
			</select>
		    </p>
		    <input type="submit" name="submit_adunits_save" value="{$aLang.adunits_submit_save}" onclick="lsAdTree.save('{$oAdunits->getAdunitsId()}');" /> <br />
		    <br/><a href="#" onclick="lsAdTree.toggle({$oAdunits->getAdunitsId()}); return false;" style="color: red;">{$aLang.adunits_fohm_hide}</a>
		</form>
		<br /><br />
	    </div>
	</div>
    {/foreach}

{else}
    {$aLang.adunits_menu_settings_empty}
{/if}

{include file='footer.tpl'}
