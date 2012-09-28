{if $aUsersList}
		{foreach from=$aUsersList item=oUserList}
		                <a href="{$oUserList->getUser()->getUserWebPath()}">
							<img src="{$oUserList->getUser()->getProfileAvatarPath(100)}" alt="{$oUserList->getUser()->getLogin()}"/>
						</a>
					<h5>
						<a href="{$oUserList->getUser()->getUserWebPath()}" title="{$oUserList->getUser()->getLogin()}">{$oUserList->getUser()->getLogin()}</a>
					</h5>
		{/foreach}
{else}
	{$aLang.user_empty}
{/if}