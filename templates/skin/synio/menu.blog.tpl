<nav class="btn-group" style="margin-bottom: 20px">
  <span class="btn">Блоги  →  </span>
  <a class="{if ($sMenuItemSelect=='index' and $sEvent!='new')}active {/if}btn btn-primary" href="{cfg name='path.root.web'}/">{$aLang.blog_menu_all}</a>
  {if $iCountTopicsNew>0}
    <a class="{if $sMenuSubItemSelect=='new'}active {/if}btn btn-primary" href="{router page='index'}new/" title="{$aLang.blog_menu_top_period_24h}">{$aLang.blog_menu_all_new} +{$iCountTopicsNew}</a>
  {/if}
  <a class="{if $sMenuItemSelect=='blog'}active {/if}btn btn-primary" href="{router page='blog'}">{$aLang.blog_menu_collective}</a>
  <a class="{if $sMenuItemSelect=='log'}active {/if}btn btn-primary" href="{router page='personal_blog'}">{$aLang.blog_menu_personal}</a>
  <a class="{if $sMenuSubItemSelect=='discussed'}active {/if}btn btn-primary" href="{router page='index'}discussed/">{$aLang.blog_menu_all_discussed}</a>
  {hook run='menu_blog_index_item'}
{if $oUserCurrent}
  <a class="{if $sMenuItemSelect=='feed'}active {/if}btn btn-primary" href="{router page='feed'}">{$aLang.userfeed_title}</a>
{/if}
{hook run='menu_blog'}
</nav>