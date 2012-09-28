{if $oTopic}
  {assign var="oBlog" value=$oTopic->getBlog()}
  {if $oBlog->getType()!='personal'}
  <section class="block-blog">
    <header><h3>{$oBlog->getTitle()|escape:'html'} <a href="{$oBlog->getUrlFull()}"> → </a></h3></header>
    <div class="block-content">
      <span id="blog_user_count_{$oBlog->getId()}">{$oBlog->getCountUser()}</span> {$oBlog->getCountUser()|declension:$aLang.reader_declension:'russian'}<br />
      {$oBlog->getCountTopic()} {$oBlog->getCountTopic()|declension:$aLang.topic_declension:'russian'}
	</div>
	<footer>
	  {if $oUserCurrent and $oUserCurrent->getId()!=$oBlog->getOwnerId()}
	    <button type="submit"  class="btn btn-nostyle" id="blog-join" data-only-text="1" onclick="ls.blog.toggleJoin(this,{$oBlog->getId()}); return false;">{if $oBlog->getUserIsJoin()}{$aLang.blog_leave}{else}{$aLang.blog_join}{/if}</button> · 
	  {/if}<a href="{router page='rss'}blog/{$oBlog->getUrl()}/" class="btn btn-nostyle rss">RSS</a>
	</footer>
  </section>
  {/if}
{/if}