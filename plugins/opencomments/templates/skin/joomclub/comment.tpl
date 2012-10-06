{assign var="oUser" value=$oComment->getUser()}
{assign var="oVote" value=$oComment->getVote()}

{if $oComment->getDelete() and ($oUserCurrent and $oUserCurrent->isAdministrator())}
<div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle gray-text-link" data-toggle="collapse" data-parent="#comment{$oComment->getId()}" href="#comment{$oComment->getId()}-onetab">Комментарий удалён</a>
    </div>
    <div id="comment{$oComment->getId()}-onetab" class="accordion-body collapse">
      <div class="accordion-inner">
{/if}
        <section id="comment_id_{$oComment->getId()}" class="comment{if $oComment->isBad()} comment-bad{/if}{if $oComment->getDelete()} comment-deleted{elseif $oUserCurrent and $oComment->getUserId() == $oUserCurrent->getId()} comment-self{elseif $sDateReadLast <= $oComment->getDate()} comment-new{/if}">
	      {if !$oComment->getDelete() or $bOneComment or ($oUserCurrent and $oUserCurrent->isAdministrator())}
	      <a name="comment{$oComment->getId()}"></a>
	      <div class="folding"></div>
	      <div class="comment_list_avatar span1">
            {if !$oUser->getId() }
                <img src="http://joomclub.net/templates/skin/joomclub/images/avatar_guest_48x48.png" alt="avatar" class="comment-avatar" />
                <br />
                {$oComment->getGuestName()}
            {else}
            <a href="{$oUser->getUserWebPath()}">
                <img src="{$oUser->getProfileAvatarPath(48)}" alt="avatar" class="comment-avatar" />
            </a>
            <br />
                <a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>
            {/if}
	      </div>
	      <div id="comment_content_id_{$oComment->getId()}" class="comment-content span10">
	        <div class=" text">
	          {$oComment->getText()}
	        </div>
	      </div>

        <div class="cls"></div>


		<ul class="comment-info">
			<li class="comment-date">
				<time datetime="{date_format date=$oComment->getDate() format='c'}" title="{date_format date=$oComment->getDate() format="j F Y, H:i"}">
					{date_format date=$oComment->getDate() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j.m H:i"}
				</time>
			</li>


			{if $oComment->getTargetType() != 'talk'}
				<li id="vote_area_comment_{$oComment->getId()}" class="vote{if $oComment->getRating() > 0} vote-count-positive{elseif $oComment->getRating() < 0} vote-count-negative{/if}{if (strtotime($oComment->getDate()) < $smarty.now - $oConfig->GetValue('acl.vote.comment.limit_time') && !$oVote) || ($oUserCurrent && $oUserCurrent->getId() == $oUser->getId())} vote-expired{/if}{if $oVote} voted{if $oVote->getDirection() > 0} voted-up{else} voted-down{/if}{/if}">
					<div class="vote-item vote-down" onclick="return ls.vote.vote({$oComment->getId()},this,-1,'comment');" title="{$aLang.topic_vote_down}"><i class="ico-down"></i></div>
					<span class="vote-count" id="vote_total_comment_{$oComment->getId()}">{if $oComment->getRating() > 0}+{/if}{$oComment->getRating()}</span>
					<div class="vote-item vote-up" onclick="return ls.vote.vote({$oComment->getId()},this,1,'comment');" title="{$aLang.topic_vote_up}"><i class="ico-up"></i></div>
				</li>
			{/if}


			{if $oUserCurrent and !$bNoCommentFavourites}
				<li class="comment-favourite">
					<div onclick="return ls.favourite.toggle({$oComment->getId()},this,'comment');" class="favourite{if $oComment->getIsFavourite()} active{/if} ico-heart" title="{$aLang.topic_favourite_add}"></div>
					<span class="favourite-count red-color" id="fav_count_comment_{$oComment->getId()}">{if $oComment->getCountFavourite() > 0}{$oComment->getCountFavourite()}{/if}</span>
				</li>
			{/if}
			<li class="comment-link">
				<a href="{if $oConfig->GetValue('module.comment.nested_per_page')}{router page='comments'}{else}#comment{/if}{$oComment->getId()}" title="{$aLang.comment_url_notice}"><i class="icon-flag"></i></a>
			</li>

			{if $oComment->getPid()}
				<li class="goto goto-comment-parent"><a href="#" onclick="ls.comments.goToParentComment({$oComment->getId()},{$oComment->getPid()}); return false;" title="{$aLang.comment_goto_parent}">↑</a></li>
			{/if}
			<li class="goto goto-comment-child"><a href="#" title="{$aLang.comment_goto_child}">↓</a></li>

			{if $oUserCurrent}
				{if !$oComment->getDelete() and !$bAllowNewComment}
					<li><a href="#" onclick="ls.comments.toggleCommentForm({$oComment->getId()}); return false;" class="reply-link link-dotted"><i class="icon-share-alt"></i>{$aLang.comment_answer}</a></li>
				{/if}

				{if !$oComment->getDelete() and $oUserCurrent and $oUserCurrent->isAdministrator()}
					<li><a href="#" class="comment-delete link-dotted" onclick="ls.comments.toggle(this,{$oComment->getId()}); return false;"><i class="icon-trash"></i>{$aLang.comment_delete}</a></li>
				{/if}

				{if $oComment->getDelete() and $oUserCurrent and $oUserCurrent->isAdministrator()}
					<li><a href="#" class="comment-repair link-dotted" onclick="ls.comments.toggle(this,{$oComment->getId()}); return false;">{$aLang.comment_repair}</a></li>
				{/if}

				{hook run='comment_action' comment=$oComment}
			{/if}
		</ul>
	{else}
		{$aLang.comment_was_delete}
	{/if}
</section>
{if $oComment->getDelete() and ($oUserCurrent and $oUserCurrent->isAdministrator())}
</div>
</div>
</div>
{/if}