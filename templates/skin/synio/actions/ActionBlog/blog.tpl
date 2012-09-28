{include file='header.tpl'}
{assign var="oUserOwner" value=$oBlog->getOwner()}
{assign var="oVote" value=$oBlog->getVote()}


<script type="text/javascript">
	jQuery(function($){
		ls.lang.load({lang_load name="blog_fold_info,blog_expand_info"});
	});
</script>


{if $oUserCurrent and $oUserCurrent->isAdministrator()}
<div class="modal fade" id="blogdelete" data-target="#blogdelete">
  <div class="modal-header">
    <h3>{$aLang.blog_admin_delete_title}</h3>
  </div>
  <div class="modal-body">


		<form action="{router page='blog'}delete/{$oBlog->getId()}/" method="POST" class="modal-content">
			<p><label for="topic_move_to">{$aLang.blog_admin_delete_move}:</label>
			<select name="topic_move_to" id="topic_move_to" class="input-width-full">
				<option value="-1">{$aLang.blog_delete_clear}</option>
				{if $aBlogs}
					<optgroup label="{$aLang.blogs}">
						{foreach from=$aBlogs item=oBlogDelete}
							<option value="{$oBlogDelete->getId()}">{$oBlogDelete->getTitle()|escape:'html'}</option>
						{/foreach}
					</optgroup>
				{/if}
			</select></p>

			<input type="hidden" value="{$LIVESTREET_SECURITY_KEY}" name="security_ls_key" />
			<button type="submit"  class="btn btn-primary">{$aLang.blog_delete}</button>
		</form>
  </div>
  <div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn btn-primary">Закрыть</a>
  </div>
</div>
{/if}


<div class="blog-top">
	<h2 class="page-header">
      {$oBlog->getTitle()|escape:'html'} →
	  <span class="btn-group">
		<a class="{if $sMenuSubItemSelect=='good'}active {/if}btn btn-primary" href="{$sMenuSubBlogUrl}">{$aLang.blog_menu_collective_good}</a>
		{if $iCountTopicsBlogNew>0}<a class="{if $sMenuSubItemSelect=='new'}active {/if}btn btn-primary new" href="{$sMenuSubBlogUrl}new/">{$aLang.blog_menu_collective_new} +{$iCountTopicsBlogNew}</a>{/if}
		<a class="{if $sMenuSubItemSelect=='discussed'}active {/if}btn btn-primary" href="{$sMenuSubBlogUrl}discussed/">{$aLang.blog_menu_collective_discussed}</a>
		<a class="{if $sMenuSubItemSelect=='top'}active {/if}btn btn-primary" href="{$sMenuSubBlogUrl}top/">{$aLang.blog_menu_collective_top}</a>
		{if $oUserCurrent and $oUserCurrent->getId()!=$oBlog->getOwnerId()}
		  <button type="submit"  class="btn btn-primary" id="button-blog-join-first-{$oBlog->getId()}" data-button-additional="button-blog-join-second-{$oBlog->getId()}" data-only-text="1" onclick="ls.blog.toggleJoin(this, {$oBlog->getId()}); return false;">{if $oBlog->getUserIsJoin()}{$aLang.blog_leave}{else}{$aLang.blog_join}{/if}</button>
		{/if}
		<a class="btn btn-primary" href="{router page='rss'}blog/{$oBlog->getUrl()}/">RSS</a>
		{hook run='menu_blog_blog_item'}
	  </span>
      {if $oBlog->getType()=='close'} <i title="{$aLang.blog_closed}" class="icon-synio-topic-private"></i>{/if}
        <span class="btn-group">
	      {if $oUserCurrent and ($oUserCurrent->getId()==$oBlog->getOwnerId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() )}
            <a data-toggle="modal" href="#blogdelete" class="btn btn-primary">Удалить блог</a>
	        <a href="{router page='blog'}edit/{$oBlog->getId()}/" title="{$aLang.blog_edit}" class="edit btn btn-primary">{$aLang.blog_edit}</a>
		    {if $oUserCurrent->isAdministrator()}
		      <a href="#" title="{$aLang.blog_delete}" id="blog_delete_show" class="delete btn btn-primary">{$aLang.blog_delete}</a>
		    {else}
		      <a href="{router page='blog'}delete/{$oBlog->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.blog_delete}" onclick="return confirm('{$aLang.blog_admin_delete_confirm}');"  class="btn btn-primary">{$aLang.blog_delete}</a>
		    {/if}
	      {/if}
        </span>
      </h2>
</div>

<div id="bloginfo" class="accordion">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a href="#bloginfo-onetab" data-parent="#bloginfo" data-toggle="collapse" class="accordion-toggle">{$aLang.blog_expand_info}</a>
    </div>
    <div class="accordion-body collapse" id="bloginfo-onetab">
      <div class="accordion-inner">
		<div class="blog-content">
			<p class="blog-description">{$oBlog->getDescription()}</p>
			{hook run='blog_info_begin' oBlog=$oBlog}
			<strong>{$aLang.blog_user_administrators}:</strong> <a href="{$oUserOwner->getUserWebPath()}">{$oUserOwner->getLogin()}</a>
			{if $aBlogAdministrators}
				{foreach from=$aBlogAdministrators item=oBlogUser}
					{assign var="oUser" value=$oBlogUser->getUser()}
						<a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>
				{/foreach}
			{/if}
            <br /><br />
			<strong>{$aLang.blog_user_moderators}:</strong>
			{if $aBlogModerators}
				{foreach from=$aBlogModerators item=oBlogUser}
					{assign var="oUser" value=$oBlogUser->getUser()}
						<a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>
				{/foreach}
			{else}
				{$aLang.blog_user_moderators_empty}
			{/if}
			{hook run='blog_info_end' oBlog=$oBlog}
		</div>
      </div>
    </div>
  </div>
</div>


{hook run='blog_info' oBlog=$oBlog}


	{if $sPeriodSelectCurrent}
		<ul class="nav nav-pills nav-pills-dropdown">
			<li {if $sPeriodSelectCurrent=='1'}class="active"{/if}><a href="{$sPeriodSelectRoot}?period=1">{$aLang.blog_menu_top_period_24h}</a></li>
			<li {if $sPeriodSelectCurrent=='7'}class="active"{/if}><a href="{$sPeriodSelectRoot}?period=7">{$aLang.blog_menu_top_period_7d}</a></li>
			<li {if $sPeriodSelectCurrent=='30'}class="active"{/if}><a href="{$sPeriodSelectRoot}?period=30">{$aLang.blog_menu_top_period_30d}</a></li>
			<li {if $sPeriodSelectCurrent=='all'}class="active"{/if}><a href="{$sPeriodSelectRoot}?period=all">{$aLang.blog_menu_top_period_all}</a></li>
		</ul>
	{/if}




{if $bCloseBlog}
	{$aLang.blog_close_show}
{else}
	{include file='topic_list.tpl'}
{/if}


{include file='footer.tpl'}