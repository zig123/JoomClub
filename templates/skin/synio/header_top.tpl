<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand visible-phone" href="{cfg name='path.root.web'}" title="{cfg name='view.name'}">{cfg name='view.name'}</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li {if $sAction=='index'}class="active"{/if}><a href="{cfg name='path.root.web'}" class="navtopcolor">{$aLang.topic_title}</a></li>
		  <li class="dropdown{if ($sAction=='blog' and $sEvent!="news")} active{/if}">
            <a data-toggle="dropdown" class="dropdown-toggle navtopcolor" data-target="#" href="{router page='blogs'}">{$aLang.blogs}<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li {if $sEvent=='joomla25'}class="active"{/if}><a href="http://joomclub.net/blog/joomla25/" title="Joomla 2.5">Joomla 2.5</a></li>
              <li {if $sEvent=='seo'}class="active"{/if}><a href="http://joomclub.net/blog/seo/" title="SEO">SEO</a></li>
              <li {if $sEvent=='design'}class="active"{/if}><a href="http://joomclub.net/blog/design/" title="Дизайн">Дизайн</a></li>
              <li {if $sEvent=='verstka'}class="active"{/if}><a href="http://joomclub.net/blog/verstka/" title="Верстка">Верстка</a></li>
              <li {if $sEvent=='extensions'}class="active"{/if}><a href="http://joomclub.net/blog/extensions/" title="Расширения Joomla"><b>Расширения Joomla</b></a></li>
              <li {if $sEvent=='extensions-components'}class="active"{/if}><a href="http://joomclub.net/blog/extensions-components/" title="Компоненты Joomla"><i class="ico-com"></i> Компоненты Joomla</a></li>
              <li {if $sEvent=='extensions-modules'}class="active"{/if}><a href="http://joomclub.net/blog/extensions-modules/" title="Модули Joomla"><i class="ico-mod"></i> Модули Joomla</a></li>
              <li {if $sEvent=='extensions-plugins'}class="active"{/if}><a href="http://joomclub.net/blog/extensions-plugins/" title="Плагины Joomla"><i class="ico-plugin"></i> Плагины Joomla</a></li>
            </ul>
          </li>
          <li {if $sEvent=='news'}class="active"{/if}><a class="navtopcolor" title="Новости" href="http://joomclub.net/blog/news/">Новости</a></li>
		  <li {if $sMenuHeadItemSelect=='people'}class="active"{/if}><a class="navtopcolor" href="{router page='people'}">{$aLang.people}</a></li>
		  <li {if $sMenuHeadItemSelect=='stream'}class="active"{/if}><a class="navtopcolor" href="{router page='stream'}">{$aLang.stream_menu}</a></li>
		  <li><a class="navtopcolor" href="http://joomlaforum.ru/" target="_blank">JoomlaForum</a></li>
		  <li><a class="navtopcolor" href="http://joomlaportal.ru/" target="_blank">JoomlaPortal</a></li>
	  </ul>
      </div>


	{hook run='main_menu'}

	
	{hook run='userbar_nav'}

	{if $oUserCurrent}
      <div class="pull-right">
		<div class="dropdown-user" id="dropdown-user">

			<ul class="nav pull-right">
              <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle profile" href="#">Профиль<b class="caret"></b></a>
                <ul class="dropdown-menu">
				  <li class="item-stat">
					<span class="strength" title="{$aLang.user_skill}"><i class="ico-star"></i> {$oUserCurrent->getSkill()}</span>
					<span class="rating {if $oUserCurrent->getRating() < 0}negative{/if}" title="{$aLang.user_rating}"><i class="ico-rating"></i> {$oUserCurrent->getRating()}</span>
					{hook run='userbar_stat_item'}
				  </li>
				  {hook run='userbar_item_first'}
				  <li class="item-messages">
					<a href="{router page='talk'}" id="new_messages">
						<i class="ico-privatmessages"></i>
						{$aLang.user_privat_messages}
						{if $iUserCurrentCountTalkNew}<div class="new">+{$iUserCurrentCountTalkNew}</div>{/if}
					</a>
				  </li>
				  <li class="item-favourite"><a href="{$oUserCurrent->getUserWebPath()}favourites/topics/"><i class="ico-heart"></i> {$aLang.user_menu_profile_favourites}</a></li>
				  <li class="item-profile"><a href="{$oUserCurrent->getUserWebPath()}"><i class="ico-userprofile"></i> {$aLang.footer_menu_user_profile}</a></li>
				  <li class="item-settings"><a href="{router page='settings'}profile/"><i class="ico-settings"></i> {$aLang.user_settings}</a></li>
				  <li class="item-create"><a href="{router page='topic'}add/"><i class="ico-file"></i> {$aLang.block_create}</a></li>
				  {hook run='userbar_item_last'}
				  <li class="item-signout"><a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}"><i class="ico-off"></i> {$aLang.exit}</a></li>
                  </ul>
              </li>
              {if $oUserCurrent and $oUserCurrent->isAdministrator()}
                <li><a href="{router page='admin'}" title="{$aLang.admin_title}" class="administrator">Администрирование</a></li>
              {/if}
              {if $oUserCurrent}
                <li><a href="#topicadd" class="administrator" data-toggle="modal">{$aLang.block_create}</a></li>
              {/if}

			</ul>




		</div>
      </div>
	{else}
		<div class="pull-right">
			{hook run='userbar_item'}
			<a href="#usrlogin" data-target="#usrlogin" data-toggle="modal" class="btn btn-primary">{$aLang.user_login_submit}</a>
		</div>
	{/if}

	{if $iUserCurrentCountTalkNew}<a href="{router page='talk'}"><i class="ico-privatmessages"></i> +{$iUserCurrentCountTalkNew}</a>{/if}
	
	
	{hook run='header_banner_end'}
</header>
      </div>
    </div>
  </div>
