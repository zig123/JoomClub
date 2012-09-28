{if $aUsersList}
  <div class="row-fluid">
		{foreach from=$aUsersList item=oUserList}
      <div class="span6">
		                <a href="{$oUserList->getUser()->getUserWebPath()}">
							<img src="{$oUserList->getUser()->getProfileAvatarPath(100)}" alt="{$oUserList->getUser()->getLogin()}"/>
						</a>
					<h5>
						<a href="{$oUserList->getUser()->getUserWebPath()}" title="{$oUserList->getUser()->getLogin()}">{$oUserList->getUser()->getLogin()}</a>
					</h5>
      </div>
		{/foreach}
  </div>
{else}
	{$aLang.user_empty}
{/if}