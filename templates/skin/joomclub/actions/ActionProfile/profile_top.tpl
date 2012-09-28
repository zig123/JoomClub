<div class="profile">
  {hook run='profile_top_begin' oUserProfile=$oUserProfile}
  <div class="page-header">
	<h2 class="span6">
      {$oUserProfile->getLogin()}{if $oUserProfile->getProfileName()} ({$oUserProfile->getProfileName()|escape:'html'}){/if}
      <div class="{if $oUserProfile->isOnline()}btn btn-success{else}btn btn-danger{/if}">{if $oUserProfile->isOnline()}{$aLang.user_status_online}{else}{$aLang.user_status_offline}{/if}</div>
	  {if $oUserCurrent && $oUserCurrent->getId()!=$oUserProfile->getId()}<a href="{router page='talk'}add/?talk_users={$oUserProfile->getLogin()}"><button type="submit"  class="btn btn-primary"><span>{$aLang.user_write_prvmsg}</span></button></a>{/if}
      {if $oUserCurrent and $oUserCurrent->getId() == $oUserProfile->getId()}<a href="{router page='settings'}" class="edit btn btn-primary">{$aLang.profile_about_edit}</a>{/if}
    </h2>
	<div class="vote-profile span6" style="max-height: 14px!important;margin-top: 10px">
	    <div class="strength pull-right"><div class="count" id="user_skill_{$oUserProfile->getId()}">   <i class="icon-synio-star-green"></i> {$oUserProfile->getSkill()}</div></div>
		<div id="vote_area_user_{$oUserProfile->getId()}" class="pull-right vote-topic
																	{if $oUserProfile->getRating() > 0}
																		vote-count-positive
																	{elseif $oUserProfile->getRating() < 0}
																		vote-count-negative
																	{elseif $oUserProfile->getRating() == 0}
																		vote-count-zero
																	{/if}

																	{if $oVote}
																		voted

																		{if $oVote->getDirection() > 0}
																			voted-up
																		{elseif $oVote->getDirection() < 0}
																			voted-down
																		{/if}
																	{else}
																		not-voted
																	{/if}

																	{if ($oUserCurrent && $oUserProfile->getId() == $oUserCurrent->getId()) || !$oUserCurrent}
																		vote-nobuttons
																	{/if}">
            <i class="icon-synio-rating"></i>
			<div class="vote-item vote-down" onclick="return ls.vote.vote({$oUserProfile->getId()},this,-1,'user');"><span><i class="ico-down"></i></span></div>
			<div class="vote-item vote-count" title="{$aLang.user_vote_count}: {$oUserProfile->getCountVote()}">
				<span id="vote_total_user_{$oUserProfile->getId()}">{if $oUserProfile->getRating() > 0}+{/if}{$oUserProfile->getRating()}</span>
			</div>
			<div class="vote-item vote-up" onclick="return ls.vote.vote({$oUserProfile->getId()},this,1,'user');"><span><i class="ico-up"></i></span></div>
		</div>
	</div>
    <div class="cls"></div>
	{hook run='profile_top_end' oUserProfile=$oUserProfile}
  </div>
</div>