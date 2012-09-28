{if $aUsersList}
  <div class="row-fluid">
	{foreach from=$aUsersList item=oUserList}
      <div class="span4">
			<a href="{$oUserList->getUserWebPath()}" title="{$oUserList->getLogin()}">
				<img src="{$oUserList->getProfileAvatarPath(100)}" title="{$oUserList->getLogin()}"/>
			</a>
			<h5>
				<a href="{$oUserList->getUserWebPath()}" title="{$oUserList->getLogin()}">{$oUserList->getLogin()}</a>
			</h5>
      </div>
	{/foreach}
  </div>
<div class="clear"></div>


{else}
	{$aLang.user_empty}
{/if}
