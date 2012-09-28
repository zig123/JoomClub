<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:20:36
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564985065048e9745689c7-76996001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc4c8ad7011190f8431803817321ae2aa083e6db' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/header_top.tpl',
      1 => 1346486807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564985065048e9745689c7-76996001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAction' => 0,
    'aLang' => 0,
    'sEvent' => 0,
    'sMenuHeadItemSelect' => 0,
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e97480e564_86805189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e97480e564_86805189')) {function content_5048e97480e564_86805189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand visible-phone" href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='index'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" class="navtopcolor"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
		  <li class="dropdown<?php if (($_smarty_tpl->tpl_vars['sAction']->value=='blog'&&$_smarty_tpl->tpl_vars['sEvent']->value!="news")){?> active<?php }?>">
            <a data-toggle="dropdown" class="dropdown-toggle navtopcolor" data-target="#" href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='joomla25'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/joomla25/" title="Joomla 2.5">Joomla 2.5</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='seo'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/seo/" title="SEO">SEO</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='design'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/design/" title="Дизайн">Дизайн</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='verstka'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/verstka/" title="Верстка">Верстка</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='extensions'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/extensions/" title="Расширения Joomla"><b>Расширения Joomla</b></a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='extensions-components'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/extensions-components/" title="Компоненты Joomla"><i class="ico-com"></i> Компоненты Joomla</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='extensions-modules'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/extensions-modules/" title="Модули Joomla"><i class="ico-mod"></i> Модули Joomla</a></li>
              <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='extensions-plugins'){?>class="active"<?php }?>><a href="http://joomclub.net/blog/extensions-plugins/" title="Плагины Joomla"><i class="ico-plugin"></i> Плагины Joomla</a></li>
            </ul>
          </li>
          <li <?php if ($_smarty_tpl->tpl_vars['sEvent']->value=='news'){?>class="active"<?php }?>><a class="navtopcolor" title="Новости" href="http://joomclub.net/blog/news/">Новости</a></li>
		  <li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a class="navtopcolor" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
		  <li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='stream'){?>class="active"<?php }?>><a class="navtopcolor" href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>
		  <li><a class="navtopcolor" href="http://joomlaforum.ru/" target="_blank">JoomlaForum</a></li>
		  <li><a class="navtopcolor" href="http://joomlaportal.ru/" target="_blank">JoomlaPortal</a></li>
	  </ul>
      </div>


	<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>


	
	<?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
      <div class="pull-right">
		<div class="dropdown-user" id="dropdown-user">

			<ul class="nav pull-right">
              <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle profile" href="#">Профиль<b class="caret"></b></a>
                <ul class="dropdown-menu">
				  <li class="item-stat">
					<span class="strength" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
"><i class="ico-star"></i> <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getSkill();?>
</span>
					<span class="rating <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating()<0){?>negative<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
"><i class="ico-rating"></i> <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating();?>
</span>
					<?php echo smarty_function_hook(array('run'=>'userbar_stat_item'),$_smarty_tpl);?>

				  </li>
				  <?php echo smarty_function_hook(array('run'=>'userbar_item_first'),$_smarty_tpl);?>

				  <li class="item-messages">
					<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" id="new_messages">
						<i class="ico-privatmessages"></i>
						<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_privat_messages'];?>

						<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><div class="new">+<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
</div><?php }?>
					</a>
				  </li>
				  <li class="item-favourite"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/"><i class="ico-heart"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites'];?>
</a></li>
				  <li class="item-profile"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><i class="ico-userprofile"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
				  <li class="item-settings"><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><i class="ico-settings"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
				  <li class="item-create"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><i class="ico-file"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
				  <?php echo smarty_function_hook(array('run'=>'userbar_item_last'),$_smarty_tpl);?>

				  <li class="item-signout"><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><i class="ico-off"></i> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
                  </ul>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
                <li><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
" class="administrator">Администрирование</a></li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
                <li><a href="#topicadd" class="administrator" data-toggle="modal"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
              <?php }?>

			</ul>




		</div>
      </div>
	<?php }else{ ?>
		<div class="pull-right">
			<?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

			<a href="#usrlogin" data-target="#usrlogin" data-toggle="modal" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
"><i class="ico-privatmessages"></i> +<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
</a><?php }?>
	
	
	<?php echo smarty_function_hook(array('run'=>'header_banner_end'),$_smarty_tpl);?>

</header>
      </div>
    </div>
  </div>
<?php }} ?>