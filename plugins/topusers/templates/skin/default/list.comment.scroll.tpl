{if $aUsersList}
	{foreach from=$aUsersList item=oUserList}
			<a href="{$oUserList->getUser()->getUserWebPath()}" title="{$oUserList->getUser()->getLogin()}">
				<img src="{$oUserList->getUser()->getProfileAvatarPath(100)}" title="{$oUserList->getUser()->getLogin()}"/>
			</a>
			<h5>
				<a href="{$oUserList->getUser()->getUserWebPath()}" title="{$oUserList->getUser()->getLogin()}">{$oUserList->getUser()->getLogin()}</a>
			</h5>
			<p class="tags">
				<a href="{router page='talk'}add/?talk_users={$oUserList->getUser()->getLogin()}" title='{$aLang.user_write_prvmsg}'>{$aLang.user_write_prvmsg}</a>
			</p>
	{/foreach}
<div class="clear"></div>
{else}
	{$aLang.user_empty}
{/if}
