<!DOCTYPE html>
<html lang="ru-ru">
<head>
	{hook run='html_head_begin'}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{$sHtmlTitle}</title>
	<meta name="description" content="{$sHtmlDescription}">
	<meta name="keywords" content="{$sHtmlKeywords}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="{cfg name='path.static.skin'}/images/favicon.ico?v1" rel="shortcut icon" />
	<link rel="search" type="application/opensearchdescription+xml" href="{router page='search'}opensearch/" title="{cfg name='view.name'}" />
	{if $aHtmlRssAlternate}<link rel="alternate" type="application/rss+xml" href="{$aHtmlRssAlternate.url}" title="{$aHtmlRssAlternate.title}">{/if}
	{if $sHtmlCanonical}<link rel="canonical" href="{$sHtmlCanonical}" />{/if}
	{if $bRefreshToHome}<meta  HTTP-EQUIV="Refresh" CONTENT="3; URL={cfg name='path.root.web'}/">{/if}
	<script type="text/javascript">
		var DIR_WEB_ROOT 			= '{cfg name="path.root.web"}';
		var DIR_STATIC_SKIN 		= '{cfg name="path.static.skin"}';
		var DIR_ROOT_ENGINE_LIB 	= '{cfg name="path.root.engine_lib"}';
		var LIVESTREET_SECURITY_KEY = '{$LIVESTREET_SECURITY_KEY}';
		var SESSION_ID				= '{$_sPhpSessionId}';
		var BLOG_USE_TINYMCE		= '{cfg name="view.tinymce"}';

		var TINYMCE_LANG = 'en';
		{if $oConfig->GetValue('lang.current') == 'russian'}
			TINYMCE_LANG = 'ru';
		{/if}

		var aRouter = new Array();
		{foreach from=$aRouter key=sPage item=sPath}
			aRouter['{$sPage}'] = '{$sPath}';
		{/foreach}
	</script>
	{$aHtmlHeadFiles.js}
	<script type="text/javascript">
		var tinyMCE = false;
		ls.lang.load({json var = $aLangJs});
		ls.registry.set('comment_max_tree',{json var=$oConfig->Get('module.comment.max_tree')});
		ls.registry.set('block_stream_show_tip',{json var=$oConfig->Get('block.stream.show_tip')});
	</script>
	{hook run='html_head_end'}
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-responsive.css" type="text/css" />
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/widgets.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-alert.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-button.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-carousel.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-collapse.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-dropdown.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-modal.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-tab.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-tooltip.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-popover.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/bootstrap-typeahead.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/synio/bootstrap/prettify.js"></script>
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/synio/bootstrap/tmpl.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/synio/bootstrap/prettify.css" type="text/css" />
</head>
{if $oUserCurrent}
	{assign var=body_classes value=$body_classes|cat:' ls-user-role-user'}
	{if $oUserCurrent->isAdministrator()}
		{assign var=body_classes value=$body_classes|cat:' ls-user-role-admin'}
	{/if}
{else}
	{assign var=body_classes value=$body_classes|cat:' ls-user-role-guest'}
{/if}

{if !$oUserCurrent or ($oUserCurrent and !$oUserCurrent->isAdministrator())}
	{assign var=body_classes value=$body_classes|cat:' ls-user-role-not-admin'}
{/if}
{add_block group='toolbar' name='toolbar_admin.tpl' priority=100}
{add_block group='toolbar' name='toolbar_scrollup.tpl' priority=-100}
<body data-twttr-rendered="true">
	{hook run='body_begin'}
    {include file='header_top.tpl'}
	{if $oUserCurrent}
		{include file='window_write.tpl'}
		{include file='window_favourite_form_tags.tpl'}
	{else}
		{include file='window_login.tpl'}
	{/if}
   {if $sAction=='index'}
   <header id="overview" class="jumbotron subhead hidden-phone">
     <div class="container">
       <div class="row-fluid">
         <div class="span6">
           <a href="/"><img src="/templates/skin/synio/images/logo.png" width="342" height="70" alt="JoomClub" /></a>
           <p>Joomla является одной из самых популярных открытых в мире источником CMS (систем управления контентом). С миллионами веб-сайтов, работающих на Joomla, программное обеспечение используется физических лиц, малого и среднего бизнеса и крупных организаций по всему миру легко создавать и строить различные веб-сайты и веб-приложениями.</p>
             <div style="margin: 0;" class="btn-toolbar">
               <div class="btn-group">
                 <a href="#" title="Joomla 1.5" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 1.5 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li class="disabled"><a href="#"><strong>Локализация</strong></a></li>
                   <li><a href="http://joomlaportal.ru/content/view/77/66/" title="Joomla 1.5.26 Russian"><i class="ico-jcolor"></i> Joomla 1.5 - Русифицированная версия</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_site.1.5.25v1.zip" title="Joomla 1.5.26 - Russian"><i class="ico-lang"></i> Русский язык для лицевой панели</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_admin.1.5.25v1.zip" title="Joomla 1.5.26 - Russian"><i class="ico-lang"></i> Русский язык для административной панели</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Расширения блоггеров</strong></a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Компоненты"><i class="ico-com"></i> Компоненты</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Модули"><i class="ico-mod"></i> Модули</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Плагины"><i class="ico-plugin"></i> Плагины</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Шаблоны"><i class="ico-tmpl"></i> Шаблоны</a></li>
                 </ul>
               </div>
               <div class="btn-group">
                 <a href="#" title="Joomla 2.5" class="btn btn-purple dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 2.5 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="#" title="Joomla 2.5 - Демо"><i class="ico-jcolor"></i> Joomla 2.5 - Демо</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Локализация</strong></a></li>
                   <li><a href="http://joomlaportal.ru/content/view/77/66/" title="Joomla 2.5 - Russian"><i class="ico-jcolor"></i> Joomla 2.5 - Русифицированная версия</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_full_2.5.6v1.zip" title="Joomla 2.5 Russian"><i class="ico-lang"></i> Joomla 2.5 - Локализация</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Расширения блоггеров</strong></a></li>
                   <li><a href="#" title="Joomla 2.5 - Компоненты"><i class="ico-com"></i> Компоненты</a></li>
                   <li><a href="#" title="Joomla 2.5 - Модули"><i class="ico-mod"></i> Модули</a></li>
                   <li><a href="#" title="Joomla 2.5 - Плагины"><i class="ico-plugin"></i> Плагины</a></li>
                   <li><a href="#" title="Joomla 2.5 - Шаблоны"><i class="ico-tmpl"></i> Шаблоны</a></li>
                 </ul>
               </div>
               <div class="btn-group">
                 <a href="#" title="Joomla 3.0" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 3.0 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="http://www.kyleledbetter.com/j3ux/admin/index.html" title="Joomla 3.0 - Демо" target="_blank"><i class="ico-jcolor"></i> Joomla 3.0 - Демо</a></li>
                 </ul>
               </div>
             </div>
         </div>
         <div class="span6">
         </div>
       </div>
     </div>
   </header>
   {else}
   <header id="overview" class="jumbotron subhead hidden-phone">
     <div class="container">
       <div class="row-fluid">
         <div class="span6">
           <p>Joomla является одной из самых популярных открытых в мире источником CMS (систем управления контентом).</p>
         </div>
         <div class="span6">
             <div style="margin: 0;" class="btn-toolbar">
               <div class="btn-group">
                 <a href="#" title="Joomla 1.5" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 1.5 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li class="disabled"><a href="#"><strong>Локализация</strong></a></li>
                   <li><a href="http://joomlaportal.ru/content/view/77/66/" title="Joomla 1.5.26 Russian"><i class="ico-jcolor"></i> Joomla 1.5 - Русифицированная версия</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_site.1.5.25v1.zip" title="Joomla 1.5.26 - Russian"><i class="ico-lang"></i> Русский язык для лицевой панели</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_admin.1.5.25v1.zip" title="Joomla 1.5.26 - Russian"><i class="ico-lang"></i> Русский язык для административной панели</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Расширения блоггеров</strong></a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Компоненты"><i class="ico-com"></i> Компоненты</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Модули"><i class="ico-mod"></i> Модули</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Плагины"><i class="ico-plugin"></i> Плагины</a></li>
                   <li><a href="#" title="Joomla 1.5.26 - Шаблоны"><i class="ico-tmpl"></i> Шаблоны</a></li>
                 </ul>
               </div>
               <div class="btn-group">
                 <a href="#" title="Joomla 2.5" class="btn btn-purple dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 2.5 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="#" title="Joomla 2.5 - Демо"><i class="ico-jcolor"></i> Joomla 2.5 - Демо</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Локализация</strong></a></li>
                   <li><a href="http://joomlaportal.ru/content/view/77/66/" title="Joomla 2.5 - Russian"><i class="ico-jcolor"></i> Joomla 2.5 - Русифицированная версия</a></li>
                   <li><a href="http://joomlaportal.ru/downloads/joomla/languages/ru-RU_joomla_lang_full_2.5.6v1.zip" title="Joomla 2.5 Russian"><i class="ico-lang"></i> Joomla 2.5 - Локализация</a></li>
                   <li class="divider"></li>
                   <li class="disabled"><a href="#"><strong>Расширения блоггеров</strong></a></li>
                   <li><a href="#" title="Joomla 2.5 - Компоненты"><i class="ico-com"></i> Компоненты</a></li>
                   <li><a href="#" title="Joomla 2.5 - Модули"><i class="ico-mod"></i> Модули</a></li>
                   <li><a href="#" title="Joomla 2.5 - Плагины"><i class="ico-plugin"></i> Плагины</a></li>
                   <li><a href="#" title="Joomla 2.5 - Шаблоны"><i class="ico-tmpl"></i> Шаблоны</a></li>
                 </ul>
               </div>
               <div class="btn-group">
                 <a href="#" title="Joomla 3.0" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="ico-jwhite"></i> Joomla 3.0 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a href="http://www.kyleledbetter.com/j3ux/admin/index.html" title="Joomla 3.0 - Демо" target="_blank"><i class="ico-jcolor"></i> Joomla 3.0 - Демо</a></li>
                 </ul>
               </div>
             </div>
         </div>
       </div>
     </div>
   </header>
   <br />
   {/if}

	<div class="container">
      <div class="row-fluid" style="margin-top: 30px">
		<div class="span9">
          {include file='nav.tpl'}
		  {include file='system_message.tpl'}
          {hook run='content_begin'}