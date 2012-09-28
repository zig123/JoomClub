<nav class="btn-group" style="margin-bottom: 20px">
  <a class="{if $sMenuItemSelect=='all'}active {/if}btn btn-primary" href="{router page='people'}">{$aLang.people_menu_users_all}</a>
  <a class="{if $sMenuItemSelect=='online'}active {/if}btn btn-primary" href="{router page='people'}online/">{$aLang.people_menu_users_online}</a>
  <a class="{if $sMenuItemSelect=='new'}active {/if}btn btn-primary" href="{router page='people'}new/">{$aLang.people_menu_users_new}</a>
  {hook run='menu_people_people_item'}
</nav>
{hook run='menu_people'}
