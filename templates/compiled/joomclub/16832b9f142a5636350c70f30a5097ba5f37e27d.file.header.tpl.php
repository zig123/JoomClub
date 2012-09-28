<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 07:44:32
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:758523653505be4c9a6ad93-27746181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16832b9f142a5636350c70f30a5097ba5f37e27d' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/header.tpl',
      1 => 1348285440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '758523653505be4c9a6ad93-27746181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9b67333_60179076',
  'variables' => 
  array (
    'sHtmlTitle' => 0,
    'sHtmlDescription' => 0,
    'sHtmlKeywords' => 0,
    'aHtmlRssAlternate' => 0,
    'sHtmlCanonical' => 0,
    'bRefreshToHome' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    '_sPhpSessionId' => 0,
    'oConfig' => 0,
    'aRouter' => 0,
    'sPage' => 0,
    'sPath' => 0,
    'aHtmlHeadFiles' => 0,
    'aLangJs' => 0,
    'oUserCurrent' => 0,
    'body_classes' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9b67333_60179076')) {function content_505be4c9b67333_60179076($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_json')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.json.php';
if (!is_callable('smarty_function_add_block')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.add_block.php';
?><!DOCTYPE html>
<html lang="ru-ru">
<head>
	<?php echo smarty_function_hook(array('run'=>'html_head_begin'),$_smarty_tpl);?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</title>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['sHtmlKeywords']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico?v1" rel="shortcut icon" />
	<link rel="search" type="application/opensearchdescription+xml" href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
opensearch/" title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
" />
	<?php if ($_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value){?><link rel="alternate" type="application/rss+xml" href="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aHtmlRssAlternate']->value['title'];?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sHtmlCanonical']->value){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sHtmlCanonical']->value;?>
" /><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['bRefreshToHome']->value){?><meta  HTTP-EQUIV="Refresh" CONTENT="3; URL=<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php }?>
	<script type="text/javascript">
		var DIR_WEB_ROOT 			= '<?php echo smarty_function_cfg(array('name'=>"path.root.web"),$_smarty_tpl);?>
';
		var DIR_STATIC_SKIN 		= '<?php echo smarty_function_cfg(array('name'=>"path.static.skin"),$_smarty_tpl);?>
';
		var DIR_ROOT_ENGINE_LIB 	= '<?php echo smarty_function_cfg(array('name'=>"path.root.engine_lib"),$_smarty_tpl);?>
';
		var LIVESTREET_SECURITY_KEY = '<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
';
		var SESSION_ID				= '<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
';
		var BLOG_USE_TINYMCE		= '<?php echo smarty_function_cfg(array('name'=>"view.tinymce"),$_smarty_tpl);?>
';

		var TINYMCE_LANG = 'en';
		<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('lang.current')=='russian'){?>
			TINYMCE_LANG = 'ru';
		<?php }?>

		var aRouter = new Array();
		<?php  $_smarty_tpl->tpl_vars['sPath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sPath']->_loop = false;
 $_smarty_tpl->tpl_vars['sPage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sPath']->key => $_smarty_tpl->tpl_vars['sPath']->value){
$_smarty_tpl->tpl_vars['sPath']->_loop = true;
 $_smarty_tpl->tpl_vars['sPage']->value = $_smarty_tpl->tpl_vars['sPath']->key;
?>
			aRouter['<?php echo $_smarty_tpl->tpl_vars['sPage']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
';
		<?php } ?>
	</script>
	<?php echo $_smarty_tpl->tpl_vars['aHtmlHeadFiles']->value['js'];?>

	<script type="text/javascript">
		var tinyMCE = false;
		ls.lang.load(<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['aLangJs']->value),$_smarty_tpl);?>
);
		ls.registry.set('comment_max_tree',<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['oConfig']->value->Get('module.comment.max_tree')),$_smarty_tpl);?>
);
		ls.registry.set('block_stream_show_tip',<?php echo smarty_function_json(array('var'=>$_smarty_tpl->tpl_vars['oConfig']->value->Get('block.stream.show_tip')),$_smarty_tpl);?>
);
	</script>
	<?php echo smarty_function_hook(array('run'=>'html_head_end'),$_smarty_tpl);?>

  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-responsive.css" type="text/css" />
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/widgets.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-alert.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-button.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-carousel.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-collapse.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-dropdown.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-modal.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-tab.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-tooltip.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-popover.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/bootstrap-typeahead.js"></script>
  <script type="text/javascript" src="http://joomclub.net/templates/skin/joomclub/bootstrap/prettify.js"></script>
  
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/tmpl.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/ico.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/profile.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/comments.css" type="text/css" />
  <link rel="stylesheet" href="http://joomclub.net/templates/skin/joomclub/bootstrap/prettify.css" type="text/css" />
</head>
<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-user'), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
		<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-admin'), null, 0);?>
	<?php }?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-guest'), null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator())){?>
	<?php $_smarty_tpl->tpl_vars['body_classes'] = new Smarty_variable(($_smarty_tpl->tpl_vars['body_classes']->value).(' ls-user-role-not-admin'), null, 0);?>
<?php }?>
<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_admin.tpl','priority'=>100),$_smarty_tpl);?>

<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_scrollup.tpl','priority'=>-100),$_smarty_tpl);?>

<body data-twttr-rendered="true">
<a name="pagetop"></a>
	<?php echo smarty_function_hook(array('run'=>'body_begin'),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSubTemplate ('header_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate ('window_write.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('window_favourite_form_tags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate ('window_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='index'){?>
   <header id="overview" class="jumbotron subhead hidden-phone">
     <div class="container">
       <div class="row-fluid">
         <div class="span6">
           <a href="/"><img src="/templates/skin/joomclub/images/logo.png" width="342" height="70" alt="JoomClub" /></a>
           <p>JoomClub - это коллективный блог профессиональных разработчиков интернет сайтов. Здесь Вы найдете интересные и полезные материалы на тему создания, администрирования и продвижения сайтов на Joomla CMS. Это множество полезных рецептов, используемых в работе профессионалами, практические советы, готовые решения, ну и конечно же - готовые компоненты, модули, плагины и шаблоны, созданные членами сообщества русской поддержки Joomla.</p>
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
           <div class="span6"><img src="http://joomclub.net/templates/skin/joomclub/images/tmp/template_001.jpg" width="250" alt="" class="template-preview" /><p>Пример шаблона разработанного сообществом.</p></div>
           <div class="span6"><img src="http://joomclub.net/templates/skin/joomclub/images/tmp/template_001.jpg" width="250" alt="" class="video-preview" /><p>Пример видео-блога, записанного блоггерами.</p></div>
         </div>
       </div>
     </div>
   </header>
   <?php }else{ ?>
   <header id="overview" class="jumbotron subhead hidden-phone">
     <div class="container">
       <div class="row-fluid">
         <div class="span6">
           <p>JoomClub - это коллективный блог профессиональных разработчиков интернет сайтов. Здесь Вы найдете интересные и полезные материалы на тему создания, администрирования и продвижения сайтов на Joomla CMS.</p>
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
   <?php }?>
	<div class="container">
      <div class="row-fluid" style="margin-top: 30px">
		<section class="span9">
          <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='index'){?><?php echo $_smarty_tpl->getSubTemplate ('topbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
          <?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		  <?php echo $_smarty_tpl->getSubTemplate ('system_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          <?php echo smarty_function_hook(array('run'=>'content_begin'),$_smarty_tpl);?>

<?php }} ?>