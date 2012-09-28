{foreach from=$aReplyWall item=oReplyWall}
	{assign var="oReplyUser" value=$oReplyWall->getUser()}
	<div id="wall-reply-item-{$oReplyWall->getId()}" class="js-wall-reply-item wall-item-reply span10" style="margin-top: 10px">
		<a href="{$oReplyUser->getUserWebPath()}"><img src="{$oReplyUser->getProfileAvatarPath(48)}" alt="avatar" class="avatar" width="16" height="16" /></a>
		<a href="{$oReplyUser->getUserWebPath()}" class="author">{$oReplyUser->getLogin()}</a> ·
		<time datetime="{date_format date=$oReplyWall->getDateAdd() format='c'}">{date_format date=$oReplyWall->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}</time>
		{if $oReplyWall->isAllowDelete()}<a href="#" onclick="return ls.wall.remove({$oReplyWall->getId()});">{$aLang.wall_action_delete}</a>{/if}
		<div class="actions" style="margin-top: 10px; margin-bottom: 10px">
		  {$oReplyWall->getText()}
		</div>
	</div>
{/foreach}