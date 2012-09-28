<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:20:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2241390295048e9759670d0-94105464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537f79305509a0288d2473d65af51fe55d9bc76c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/footer.tpl',
      1 => 1346693293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2241390295048e9759670d0-94105464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noSidebar' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e975a978d7_86317531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e975a978d7_86317531')) {function content_5048e975a978d7_86317531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.cfg.php';
?>			  <?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

            </div>
			<?php if (!$_smarty_tpl->tpl_vars['noSidebar']->value){?>
				<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		</div> <!-- /content -->
	</div> <!-- /wrapper -->


	
	<footer class="container">
	  <div class="row-fluid footer">

		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
          <div class="span3">
			<ul class="nav nav-list">
				<li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
</li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="js-write-window-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','oUser'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),$_smarty_tpl);?>

				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
			</ul>
          </div>
		<?php }else{ ?>
          <div class="span3">
			<ul class="nav nav-list">
				<li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_quest_title'];?>
</li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','isGuest'=>true),$_smarty_tpl);?>

			</ul>
          </div>
		<?php }?>
		
          <div class="span3">
		    <ul class="nav nav-list">
			    <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_navigate_title'];?>
</li>
			    <li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
			    <li><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
			    <li><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
			    <li><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>
			    <?php echo smarty_function_hook(array('run'=>'footer_menu_navigate_item'),$_smarty_tpl);?>

		    </ul>
          </div>

		
		
		
		

		<div class="span3">
			<ul class="nav nav-list">
				<li  class="nav-header">JoomCLUB</li>
				<li><a href="http://joomclub.net/page/people-map/" title="Наша география">Наша география</a></li>
				<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_project_advert'];?>
</a></li>
				<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_project_contact'];?>
</a></li>
				<li><a href="http://joomclub.net/sitemap.xml" title="Карта сайта">Карта сайта</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_project_item'),$_smarty_tpl);?>

			</ul>
		</div>

		<div class="copyright span3">
			<?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

			
			<div class="design-by">
			</div>
		</div>
		
		<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

      </div>
	</footer>
</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>

                            <script language="JavaScript" type="text/javascript">
                                $("a[rel=popover]")
                                  .popover({
                                    placement: 'right',
                                    content: function getPopContent() { return document.getElementById('Popupinfo_MoreInfoContainer').innerHTML; },
                                    trigger: 'hover'
                                    })
                                  .click(function(e) {
                                    e.preventDefault()
                                    })
                            </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter16700788 = new Ya.Metrika({id:16700788, enableAll: true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/16700788" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html><?php }} ?>