{if $aUsersList}
  {foreach from=$aUsersList item=oUserList}
    {assign var="oSession" value=$oUserList->getSession()}
	<a href="{$oUserList->getUserWebPath()}" title="{$oUserList->getLogin()}" style="display: block; padding: 5px"><img src="{$oUserList->getProfileAvatarPath(48)}" alt="avatar" class="avatar" /></a>
  {/foreach}
{else}
	{if $sUserListEmpty}
		<div class="notice-empty">{$sUserListEmpty}</div>
	{else}
		<div class="notice-empty">{$aLang.user_empty}</div>
	{/if}
{/if}


{include file='paging.tpl' aPaging=$aPaging}