	{assign var="oBlog" value=$oTopic->getBlog()}
	{assign var="oUser" value=$oTopic->getUser()}
	{assign var="oVote" value=$oTopic->getVote()}
	{assign var="oFavourite" value=$oTopic->getFavourite()}


	<footer class="topic-footer">
		<ul class="topic-info">
			<li class="topic-info-date">{date_format date=$oTopic->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y"}</li>
			<li class="topic-info-separator"></li>
			<li class="topic-info-title"><a href="{$oBlog->getUrlFull()}" class="topic-blog">{$oBlog->getTitle()|escape:'html'}</a></li>
			<li class="topic-info-separator"></li>
			<li class="topic-info-author">
				<a href="{$oUser->getUserWebPath()}" rel="popover" href="#" data-original-title="{$oUser->getLogin()}" class="popover-{$oUser->getLogin()}"><img src="{$oUser->getProfileAvatarPath(24)}" alt="avatar" class="avatar" /></a>
				<a href="{$oUser->getUserWebPath()}" title="{$oUser->getLogin()}">{$oUser->getLogin()}</a>
                <div id="{$oUser->getLogin()}" style="display: none; width: 250px">
                  <div style="float: left; width: 70px; margin-right: 20px"><img src="{$oUser->getProfileAvatarPath(64)}" alt="{$oUser->getProfileName()|escape:'html'}" title="{$oUser->getProfileName()|escape:'html'}" width="70" /></div>

                  <div style="float: left; width: 150px;">
                    <b>{$oUser->getProfileName()|escape:'html'}</b><br />
                    {if ($oUser->getProfileCountry() || $oUser->getProfileCity())}
                      {if $oUser->getProfileCountry()}
                        <a href="{router page='people'}country/{$oUser->getProfileCountry()|escape:'html'}/">{$oUser->getProfileCountry()|escape:'html'}</a>{if $oUser->getProfileCity()},{/if}
                      {/if}
                      {if $oUser->getProfileCity()}
                        <a href="{router page='people'}city/{$oUser->getProfileCity()|escape:'html'}/">{$oUser->getProfileCity()|escape:'html'}</a>
                      {/if}
                    {/if}
                    <div>
                      <i class="icon-synio-star-green"></i> Рейтинг: {$oUser->getRating()}<br />
                      <i class="icon-synio-star-green"></i> Сила: {$oUser->getSkill()}<br />
                      <i class="icon-synio-star-green"></i> Публикации: {$oUser->Topic_GetCountTopicsPersonalByUser ($oUser -> getId (), 1) }<br />
                      <i class="icon-synio-star-green"></i> Комментарии: {$oUser->Comment_GetCountCommentsByUserId ($oUser -> getId (), 'topic')}<br />
                      <i class="icon-synio-star-green"></i> Проекты: {$oUser->Comment_GetCountCommentsByUserId ($oUser -> getId (), 'topic')}
                    </div>
                  </div>
                  <div class="cls"></div>
                </div>
                <script language="JavaScript" type="text/javascript">
                  $(".popover-{$oUser->getLogin()}")
                    .popover({
                      placement: 'right',
                      content: function getPopContent() { return document.getElementById('{$oUser->getLogin()}').innerHTML; },
                      })
                </script>
			</li>
			<li class="topic-info-separator"></li>
			{if $bTopicList}
			  <li class="topic-info-comments">
			    {if $oTopic->getCountCommentNew()}
				  <span><a href="{$oTopic->getUrl()}#comments" title="{$aLang.topic_comment_read}" class="new"><i class="ico-comments"></i>{$oTopic->getCountComment()}</a></span>
				{else}
				  <span><a href="{$oTopic->getUrl()}#comments" title="{$aLang.topic_comment_read}">{if $oTopic->getCountComment()}<i class="ico-comments"></i>{else}<i class="ico-comments"></i>{/if}{$oTopic->getCountComment()}</a></span>
				{/if}
			  </li>
			{/if}
			<li class="topic-info-separator"></li>
			<li class="topic-info-favourite">
				<div onclick="return ls.favourite.toggle({$oTopic->getId()},this,'topic');" class="favourite{if $oUserCurrent && $oTopic->getIsFavourite()} active{/if}" title="{$aLang.topic_favourite_add}"><i class="ico-heart"></i>&nbsp;&nbsp;<span class="favourite-count" id="fav_count_topic_{$oTopic->getId()}">{$oTopic->getCountFavourite()}</span></div>
			</li>

			{if $oVote || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId()) || strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
				{assign var="bVoteInfoShow" value=true}
			{/if}
			
			<li class="topic-info-vote">
				<div id="vote_area_topic_{$oTopic->getId()}" class="vote-topic
																	{if $oVote || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId()) || strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
																		{if $oTopic->getRating() > 0}
																			vote-count-positive
																		{elseif $oTopic->getRating() < 0}
																			vote-count-negative
																		{elseif $oTopic->getRating() == 0}
																			vote-count-zero
																		{/if}
																	{/if}
																	
																	{if !$oUserCurrent or ($oUserCurrent && $oTopic->getUserId() != $oUserCurrent->getId())}
																		vote-not-self
																	{/if}
																	
																	{if $oVote} 
																		voted
																		
																		{if $oVote->getDirection() > 0}
																			voted-up
																		{elseif $oVote->getDirection() < 0}
																			voted-down
																		{elseif $oVote->getDirection() == 0}
																			voted-zero
																		{/if}
																	{else}
																		not-voted
																	{/if}
																	
																	{if (strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time') && !$oVote) || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId())}
																		vote-nobuttons
																	{/if}
																	
																	{if strtotime($oTopic->getDateAdd()) > $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
																		vote-not-expired
																	{/if}

																	{if $bVoteInfoShow}js-infobox-vote-topic{/if}">
					<div class="vote-item vote-down" onclick="return ls.vote.vote({$oTopic->getId()},this,-1,'topic');" title="{$aLang.topic_vote_down}"><span><i class="ico-down"></i></span></div>
					<div class="vote-item vote-count" title="{$aLang.topic_vote_count}: {$oTopic->getCountVote()}">
						<span id="vote_total_topic_{$oTopic->getId()}">
							{if $bVoteInfoShow}
								{if $oTopic->getRating() > 0}+{/if}{$oTopic->getRating()}
							{else}
								<i onclick="return ls.vote.vote({$oTopic->getId()},this,0,'topic');"></i>
							{/if}
						</span>
					</div>
					<div class="vote-item vote-up" onclick="return ls.vote.vote({$oTopic->getId()},this,1,'topic');" title="{$aLang.topic_vote_up}"><span><i class="ico-up"></i></span></div>
					{if $bVoteInfoShow}
						<div id="vote-info-topic-{$oTopic->getId()}" style="display: none;">
							<ul class="vote-topic-info">
								<li><i class="icon-synio-vote-info-up"></i> {$oTopic->getCountVoteUp()}</li>
								<li><i class="icon-synio-vote-info-down"></i> {$oTopic->getCountVoteDown()}</li>
								<li><i class="icon-synio-vote-info-zero"></i> {$oTopic->getCountVoteAbstain()}</li>
								{hook run='topic_show_vote_stats' topic=$oTopic}
							</ul>
						</div>
					{/if}
				</div>
			</li>
			
			{hook run='topic_show_info' topic=$oTopic}
		</ul>

		
		{if !$bTopicList}
			{hook run='topic_show_userads' topic=$oTopic position='top'}
			{hook run='topic_show_userads' topic=$oTopic position='bottom'}
			{hook run='topic_show_end' topic=$oTopic}
		{/if}
	</footer>
</article> <!-- /.topic -->