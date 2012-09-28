{if $aUsersList}
		{foreach from=$aUsersList item=oUserList}
				<div id="cont">
					<div id="ava">
		                <a href="{$oUserList->getUserWebPath()}">
							<img src="{$oUserList->getProfileAvatarPath(100)}" alt="{$oUserList->getLogin()}"/>
						</a>
					</div>
					<div id="b_info">
						<b>{$oUserList->getLogin()}</b>
						<br/>
						<font size="1px">
							{$aLang.user_rating}: {$oUserList->getRating()}<br/>
							{$aLang.user_skill}: {$oUserList->getSkill()}<br/>
							<a href="{router page='talk'}add/?talk_users={$oUserList->getLogin()}">{$aLang.user_write_prvmsg}</a>
						</font>		
					</div>
				</div>		
		{/foreach}
{else}
	{$aLang.user_empty}
{/if}