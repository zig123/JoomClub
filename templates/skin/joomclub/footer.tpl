			  {hook run='content_end'}
            </section>
			{if !$noSidebar}
				{include file='sidebar.tpl'}
			{/if}
		</div>
	</div>

<footer class="container">
  <section class="row-fluid footer">
    {if $oUserCurrent}
    <nav class="span3">
      <ul class="nav nav-list">
        <li class="nav-header">{$oUserCurrent->getLogin()}</li>
        <li><a href="{$oUserCurrent->getUserWebPath()}">{$aLang.footer_menu_user_profile}</a></li>
        <li><a href="{router page='settings'}profile/">{$aLang.user_settings}</a></li>
        <li><a href="{router page='topic'}add/" class="js-write-window-show">{$aLang.block_create}</a></li>
        {hook run='footer_menu_user_item' oUser=$oUserCurrent}
        <li><a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.exit}</a></li>
      </ul>
    </nav>
    {else}
    <nav class="span3">
      <ul class="nav nav-list">
        <li class="nav-header">{$aLang.footer_menu_user_quest_title}</li>
        <li><a href="{router page='registration'}" class="js-registration-form-show">{$aLang.registration_submit}</a></li>
        <li><a href="{router page='login'}" class="js-login-form-show sign-in">{$aLang.user_login_submit}</a></li>
        {hook run='footer_menu_user_item' isGuest=true}
      </ul>
    </nav>
    {/if}
    <nav class="span3">
      <ul class="nav nav-list">
        <li class="nav-header">{$aLang.footer_menu_navigate_title}</li>
        <li><a href="{cfg name='path.root.web'}">{$aLang.topic_title}</a></li>
        <li><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
        <li><a href="{router page='people'}">{$aLang.people}</a></li>
        <li><a href="{router page='stream'}">{$aLang.stream_menu}</a></li>
        {hook run='footer_menu_navigate_item'}
      </ul>
    </nav>
    <nav class="span3">
      <ul class="nav nav-list">
        <li  class="nav-header">JoomCLUB</li>
        <li><a href="http://joomclub.net/page/people-map/" title="Наша география">Наша география</a></li>
        <li><a href="#">{$aLang.footer_menu_project_advert}</a></li>
        <li><a href="#">{$aLang.footer_menu_project_contact}</a></li>
        <li><a href="http://joomclub.net/sitemap.xml" title="Карта сайта">Карта сайта</a></li>
        {hook run='footer_menu_project_item'}
      </ul>
    </nav>
    <nav class="copyright span3">
      <ul class="nav nav-list">
        <li class="nav-header">Разработка</li>
        <li><a href="http://joomline.ru/" title="Менеджмент">Менеджмент - ZikkuratVK</a></li>
        <li><a href="http://argens.ru/" title="Программирование">Программирование - Arkadiy</a></li>
        <li><a href="#" title="Дизайн">Дизайн - Shustry</a></li>
        <li><a href="http://night-guard.ru/" title="Верстка">Верстка - NightGuard</a></li>
      </ul>
    </nav>
  </section>
</footer>
</div>
{include file='toolbar.tpl'}
{hook run='body_end'}
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
{literal}
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
{/literal}
</body>
</html>