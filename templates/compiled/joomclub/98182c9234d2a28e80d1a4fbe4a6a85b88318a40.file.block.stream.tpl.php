<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:54:03
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1066267130505be4db6abba3-36357321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98182c9234d2a28e80d1a4fbe4a6a85b88318a40' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/blocks/block.stream.tpl',
      1 => 1347105900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066267130505be4db6abba3-36357321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sStreamTopic' => 0,
    'sStreamComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4db6cc8c9_71828839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4db6cc8c9_71828839')) {function content_505be4db6cc8c9_71828839($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><section class="stream-topic">
	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>

	<header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</h3></header>
	<div class="block-content"><?php echo $_smarty_tpl->tpl_vars['sStreamTopic']->value;?>
</div>
</section>
<section class="stream-comments">
	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>

	<header><h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</h3></header>
	<div class="block-content"><?php echo $_smarty_tpl->tpl_vars['sStreamComments']->value;?>
</div>
</section>
<section class="stream-social">
  <ul class="nav nav-tabs" id="socialsection">
    <li class="active"><a data-toggle="tab" href="#socialvk"><i class="ico-vk"></i><span> Вконтакте</span></a></li>
    <li><a data-toggle="tab" href="#socialfb"><i class="ico-fb"></i><span> Facebook</span></a></li>
    <li><a data-toggle="tab" href="#socialtw"><i class="ico-tw"></i><span> Twitter</span></a></li>
  </ul>

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
      
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      
      <div class="fb-like-box" data-href="http://www.facebook.com/JoomlaClub" data-width="250" data-height="300" data-show-faces="true" data-stream="false" data-header="false"></div>
    </div>
    <div id="socialtw" class="tab-pane">
              <p> Десять тысяч лет назад - так говорили вполне достоверные источники - с трудом можно было различить улыбку на лице ребенка за полтора шага. Теперь же всякий легко различал ее за целых три шага. Не было никакого сомнения, что через несколько миллионов лет небо засияет яркими огнями и на земле наступит царство вечного лучезарного света. Все терпеливо ждали блаженного времени и с надеждою на него умирали. Так долгие годы шла жизнь людей тихая и безмятежная и согревалась она кроткою верою в далекие звезды.</p>
    </div>
  </div>

</section>
<?php }} ?>