<div class="users-list">
  {foreach from=$aUsersList item=oUserList}
    {assign var="oSession" value=$oUserList->getSession()}
	{assign var="oUserNote" value=$oUserList->getUserNote()}
	<div class="user-list-item tabbable">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#{$oUserList->getLogin()}1" data-toggle="tab"><i class="ico-userprofile"></i><span> Профиль</span></a></li>
        <li><a href="#{$oUserList->getLogin()}2" data-toggle="tab"><i class="ico-link"></i><span> Контакты</span></a></li>
      </ul>
      <div class="tab-content">

        <div class="tab-pane active" id="{$oUserList->getLogin()}1">
          <div class="user-list-item-avatar">
            <a href="{$oUserList->getUserWebPath()}"><img src="{$oUserList->getProfileAvatarPath(64)}" alt="{$oUserList->getProfileName()|escape:'html'}" title="{$oUserList->getProfileName()|escape:'html'}" width="70" /></a>
            <a href="{$oUserList->getUserWebPath()}"><b>{$oUserList->getLogin()}</b></a><br />
            <b>{$oUserList->getProfileName()}</b><br />
          </div>
          <div class="user-list-item-details">
            {if ($oUserList->getProfileCountry() || $oUserList->getProfileCity())}
              {if $oUserList->getProfileCountry()}
                <a href="{router page='people'}country/{$oUserList->getProfileCountry()|escape:'html'}/">{$oUserList->getProfileCountry()|escape:'html'}</a>{if $oUserList->getProfileCity()},{/if}
              {/if}
              {if $oUserList->getProfileCity()}
                <a href="{router page='people'}city/{$oUserList->getProfileCity()|escape:'html'}/">{$oUserList->getProfileCity()|escape:'html'}</a>
              {/if}
            {/if}
            <div>
              <i class="icon-synio-star-green"></i> Рейтинг: {$oUserList->getRating()}<br />
              <i class="icon-synio-star-green"></i> Сила: {$oUserList->getSkill()}<br />
              <i class="icon-synio-star-green"></i> Публикации: <a href="http://joomclub.net/profile/{$oUserList->getLogin()}/created/topics/" title="Публикации">{$oUserList->Topic_GetCountTopicsPersonalByUser ($oUserList -> getId (), 1) }</a><br />
              <i class="icon-synio-star-green"></i> Комментарии: <a href="http://joomclub.net/profile/{$oUserList->getLogin()}/created/comments/" title="Комментарии">{$oUserList->Comment_GetCountCommentsByUserId ($oUserList -> getId (), 'topic')}</a><br />
              <i class="icon-synio-star-green"></i> Проекты: {$oUserList->Comment_GetCountCommentsByUserId ($oUserList -> getId (), 'topic')}
            </div>
          </div>
          <div class="cls"></div>
        </div>
        <div class="tab-pane" id="{$oUserList->getLogin()}2">
		    {if $oUserCurrent}
		      {if $oUserNote}
		        <button type="button" class="button button-action button-action-note js-infobox btn btn-primary" title="{$oUserNote->getText()|escape:'html'}"></button><br />
		      {/if}
		      <a href="{router page='talk'}add/?talk_users={$oUserList->getLogin()}"><button type="submit" class="btn btn-primary"><span>{$aLang.user_write_prvmsg}</span></button></a><br />
		    {/if}
            {assign var="aUserFieldContactValues" value=$oUserList->getUserFieldValues(true,array('contact'))}
		    {foreach from=$aUserFieldContactValues item=oField}
		      <i class="icon-{$oField->getName()}" title="{$oField->getName()}"></i> {$oField->getValue(true,true)}<br />
		    {/foreach}
        </div>
      </div>
    </div>
  {/foreach}
  <div class="cls"></div>
</div>

{include file='paging.tpl' aPaging=$aPaging}