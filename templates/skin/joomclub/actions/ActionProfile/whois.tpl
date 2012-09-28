{assign var="sidebarPosition" value='left'}
{assign var="sMenuItemSelect" value='profile'}
{include file='header.tpl' menu='people'}
{assign var="oSession" value=$oUserProfile->getSession()}
{assign var="oVote" value=$oUserProfile->getVote()}
{assign var="oGeoTarget" value=$oUserProfile->getGeoTarget()}
{include file='actions/ActionProfile/profile_top.tpl'}
{include file='menu.profile_whois.tpl'}
{assign var="aUserFieldValues" value=$oUserProfile->getUserFieldValues(true,array(''))}
<div class="tabbable">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#{$oUserProfile->getLogin()}1">Информация</a></li>
        <li><a data-toggle="tab" href="#{$oUserProfile->getLogin()}2">Стена{if $iCountWallUser} ({$iCountWallUser}) {/if}</a></li>
        <li><a data-toggle="tab" href="#{$oUserProfile->getLogin()}3">Публикации{if $iCountTopicUser} ({$iCountTopicUser}) {/if}</a></li>
        <li><a data-toggle="tab" href="#{$oUserProfile->getLogin()}4">Комментарии{if $iCountCommentUser} ({$iCountCommentUser}) {/if}</a></li>
      </ul>
      <div class="tab-content">
        <div id="{$oUserProfile->getLogin()}1" class="tab-pane active">
        <!--  -->
        <div class="user-profile-about span11">
          <div class="span2 nml">
            <img src="{$oUserProfile->getProfileAvatarPath(100)}" alt="avatar" itemprop="photo" />
          </div>
          <div class="span9">
            {if $oUserProfile->getProfileAbout()}<p>{$oUserProfile->getProfileAbout()}</p>{else}<p>{$aLang.profile_about_empty}</p>{/if}<br />
          </div>
          <div class="cls"></div>
        </div>

        <div class="cls"></div>

        <!--  -->
        <div style="display: none">
		  <ul class="unstyled">
			{if $oConfig->GetValue('general.reg.invite') and $oUserInviteFrom}
				<li><span>{$aLang.profile_invite_from}:</span><strong><a href="{$oUserInviteFrom->getUserWebPath()}">{$oUserInviteFrom->getLogin()}</a>&nbsp;</strong></li>
			{/if}
			{if $oConfig->GetValue('general.reg.invite') and $aUsersInvite}
				<li><span>{$aLang.profile_invite_to}:</span><strong>{foreach from=$aUsersInvite item=oUserInvite}<a href="{$oUserInvite->getUserWebPath()}">{$oUserInvite->getLogin()}</a>&nbsp;{/foreach}</strong></li>
			{/if}
			{if $aBlogAdministrators}
				<li><span>{$aLang.profile_blogs_administration}:</span><strong>{foreach from=$aBlogAdministrators item=oBlogUser name=blog_user}{assign var="oBlog" value=$oBlogUser->getBlog()}<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}{/foreach}</strong></li>
			{/if}
			{if $aBlogModerators}
				<li><span>{$aLang.profile_blogs_moderation}:</span><strong>{foreach from=$aBlogModerators item=oBlogUser name=blog_user}{assign var="oBlog" value=$oBlogUser->getBlog()}<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}{/foreach}</strong></li>
			{/if}
			{if $aBlogUsers}
				<li><span>{$aLang.profile_blogs_join}:</span><strong>{foreach from=$aBlogUsers item=oBlogUser name=blog_user}{assign var="oBlog" value=$oBlogUser->getBlog()}<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>{if !$smarty.foreach.blog_user.last}, {/if}{/foreach}</strong></li>
			{/if}
			{hook run='profile_whois_activity_item' oUserProfile=$oUserProfile}
			<li><span>{$aLang.profile_date_registration}:</span><strong>{date_format date=$oUserProfile->getDateRegister()}</strong></li>
			{if $oSession}
				<li><span>{$aLang.profile_date_last}:</span><strong>{date_format date=$oSession->getDateLast()}</strong></li>
			{/if}
		  </ul>
		</div>

        <!--  -->
        <div class="row-fluid">
        <div class="user-profile-whois span6">
          <h3>Личное</h3>
		  {if $oUserProfile->getProfileSex()!='other' || $oUserProfile->getProfileBirthday() || $oGeoTarget || $oUserProfile->getProfileAbout() || count($aUserFieldValues)}
			<ul class="unstyled">
				{if $oUserProfile->getProfileSex()!='other'}
				  <li><span>{$aLang.profile_sex}:</span><strong>{if $oUserProfile->getProfileSex()=='man'}{$aLang.profile_sex_man}{else}{$aLang.profile_sex_woman}{/if}</strong></li>
				{/if}
				{if $oUserProfile->getProfileBirthday()}
				  <li><span>{$aLang.profile_birthday}:</span><strong>{date_format date=$oUserProfile->getProfileBirthday() format="j F Y"}</strong></li>
				{/if}
				{if $oGeoTarget}
				  <li><span>{$aLang.profile_place}:</span><strong itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">{if $oGeoTarget->getCountryId()}<a href="{router page='people'}country/{$oGeoTarget->getCountryId()}/" itemprop="country-name">{$oUserProfile->getProfileCountry()|escape:'html'}</a>{if $oGeoTarget->getCityId()},{/if}{/if}{if $oGeoTarget->getCityId()}<a href="{router page='people'}city/{$oGeoTarget->getCityId()}/" itemprop="locality">{$oUserProfile->getProfileCity()|escape:'html'}</a>{/if}</strong></li>
				{/if}
				{if $aUserFieldValues}
				  {foreach from=$aUserFieldValues item=oField}
				    <li><span><i class="icon-contact icon-contact-{$oField->getName()}"></i> {$oField->getTitle()|escape:'html'}:</span><strong>{$oField->getValue(true,true)}</strong></li>
				  {/foreach}
				{/if}
				{hook run='profile_whois_privat_item' oUserProfile=$oUserProfile}
			</ul>
		  {/if}
		  {hook run='profile_whois_item_after_privat' oUserProfile=$oUserProfile}
		</div>

        <!--  -->
        <div class="user-profile-contacts span6">
          <h3>Контакты</h3>
		  {assign var="aUserFieldContactValues" value=$oUserProfile->getUserFieldValues(true,array('contact'))}
		  {if $aUserFieldContactValues}
			<ul class="unstyled">
				{foreach from=$aUserFieldContactValues item=oField}
					<li><i class="icon-contact icon-contact-{$oField->getName()}" title="{$oField->getName()}"></i> {$oField->getValue(true,true)}</li>
				{/foreach}
			</ul>
		  {/if}
		  {assign var="aUserFieldContactValues" value=$oUserProfile->getUserFieldValues(true,array('social'))}
		  {if $aUserFieldContactValues}
			<ul class="unstyled">
			  {foreach from=$aUserFieldContactValues item=oField}
			    <li><i class="ico-{$oField->getName()}" title="{$oField->getName()}"></i> {$oField->getValue(true,true)}</li>
			  {/foreach}
			</ul>
		  {/if}
		  {hook run='profile_whois_item' oUserProfile=$oUserProfile}
		</div>
        </div>

        <div class="cls"></div>

        <!--  -->
        <div class="row-fluid">
        <div class="user-profile-friends span12">
          <h3>Друзья</h3>
		  {if $aUsersFriend}
			{include file='user_list_avatar.tpl' aUsersList=$aUsersFriend}
		  {/if}
		  {hook run='profile_whois_item_end' oUserProfile=$oUserProfile}
		</div>
		</div>

        </div>


        <div id="{$oUserProfile->getLogin()}2" class="tab-pane">
          {hook run='profile_whois_end' oUserProfile=$oUserProfile}
        </div>
        <div id="{$oUserProfile->getLogin()}3" class="tab-pane">
          {hook run='profile_whois_lastusertopics' oUserProfile=$oUserProfile}
          <a href="http://joomclub.net/profile/{$oUserProfile->getLogin()}/created/topics/" title="Все публикации - {$oUserProfile->getLogin()}">Все публикации</a>
        </div>
        <div id="{$oUserProfile->getLogin()}4" class="tab-pane">
          {hook run='profile_whois_lastusercomments' oUserProfile=$oUserProfile}
          <a href="http://joomclub.net/profile/{$oUserProfile->getLogin()}/created/comments/" title="Все комментарии - {$oUserProfile->getLogin()}">Все комментарии</a>
        </div>
      </div>
    </div>



{include file='footer.tpl'}