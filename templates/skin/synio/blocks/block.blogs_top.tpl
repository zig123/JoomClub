<ul class="unstyled">
  {foreach from=$aBlogs item=oBlog}
  <li>
    {strip}<a href="{$oBlog->getUrlFull()}" title="{$oBlog->getTitle()|escape:'html'}">{$oBlog->getTitle()|escape:'html'}</a>{/strip}
  </li>
  {/foreach}
</ul>