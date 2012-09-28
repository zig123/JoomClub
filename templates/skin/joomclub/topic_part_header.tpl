{assign var="oBlog" value=$oTopic->getBlog()}
{assign var="oUser" value=$oTopic->getUser()}
{assign var="oVote" value=$oTopic->getVote()}


<article class="topic">
	<header class="topic-header">
			{if $bTopicList}
				<h2 class="topic-title word-wrap"><a href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'}</a></h2>
			{else}
				<h1 class="topic-title word-wrap">{$oTopic->getTitle()|escape:'html'}</h1>
			{/if}
			
			{if $oTopic->getPublish() == 0}   
				<i class="icon-synio-topic-draft" title="{$aLang.topic_unpublish}"></i>
			{/if}
			
			{if $oTopic->getType() == 'link'} 
				<i class="icon-synio-topic-link" title="{$aLang.topic_link}"></i>
			{/if}

		
		
		<div class="topic-info">
			{if $oBlog->getType() != 'personal'}<a href="#" class="blog-list-info" onclick="return ls.infobox.showInfoBlog(this,{$oBlog->getId()});"></a>{/if}
		</div>
		
		{if $oUserCurrent and ($oUserCurrent->getId()==$oTopic->getUserId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getUserIsModerator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
			<div class="btn-group" style="margin-top: 10px; margin-bottom: 10px">
				{if $oUserCurrent and ($oUserCurrent->getId()==$oTopic->getUserId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getUserIsModerator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
					<a href="{cfg name='path.root.web'}/{$oTopic->getType()}/edit/{$oTopic->getId()}/" title="{$aLang.topic_edit}" class="actions-edit btn btn-primary"><i class="icon-pencil icon-white"></i> {$aLang.topic_edit}</a>
				{/if}
				
				{if $oUserCurrent and ($oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
					<a href="{router page='topic'}delete/{$oTopic->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.topic_delete}" onclick="return confirm('{$aLang.topic_delete_confirm}');" class="actions-delete btn btn-primary"><i class="icon-trash icon-white"></i> {$aLang.topic_delete}</a>
				{/if}
			</div>
		{/if}
	</header>