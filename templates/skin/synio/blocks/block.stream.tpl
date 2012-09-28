<section class="stream-topic">
	{hook run='block_stream_nav_item' assign="sItemsHook"}
	<header><h3>{$aLang.block_stream_topics}<div class="block-update js-block-stream-update"></div></h3></header>
	<div class="block-content">{$sStreamTopic}</div>
</section>
<section class="stream-comments">
	{hook run='block_stream_nav_item' assign="sItemsHook"}
	<header><h3>{$aLang.block_stream_comments}<div class="block-update js-block-stream-update"></div></h3></header>
	<div class="block-content">{$sStreamComments}</div>
</section>
<section class="stream-social">
  <ul class="nav nav-tabs" id="socialsection">
    <li class="active"><a data-toggle="tab" href="#socialvk"><i class="ico-vk"></i><span> Вконтакте</span></a></li>
    <li><a data-toggle="tab" href="#socialfb"><i class="ico-fb"></i><span> Facebook</span></a></li>
    <li><a data-toggle="tab" href="#socialtw"><i class="ico-tw"></i><span> Twitter</span></a></li>
  </ul>
{literal}
  <div class="tab-content" style="overflow: visible">
    <div id="socialvk" class="tab-pane active">
      <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>
      <div id="vk_groups"></div>
      <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 0, width: "250", height: "300"}, 34309990);
      </script>
    </div>
    <div id="socialfb" class="tab-pane">
      <div id="fb-root"></div>
      {literal}
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      {/literal}
      <div class="fb-like-box" data-href="http://www.facebook.com/JoomlaClub" data-width="250" data-height="300" data-show-faces="true" data-stream="false" data-header="false"></div>
    </div>
    <div id="socialtw" class="tab-pane">
              <p> Десять тысяч лет назад - так говорили вполне достоверные источники - с трудом можно было различить улыбку на лице ребенка за полтора шага. Теперь же всякий легко различал ее за целых три шага. Не было никакого сомнения, что через несколько миллионов лет небо засияет яркими огнями и на земле наступит царство вечного лучезарного света. Все терпеливо ждали блаженного времени и с надеждою на него умирали. Так долгие годы шла жизнь людей тихая и безмятежная и согревалась она кроткою верою в далекие звезды.</p>
    </div>
  </div>
{/literal}
</section>
