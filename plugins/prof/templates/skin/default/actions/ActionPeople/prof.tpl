{include file='header.tpl'  menu='people'}

<h2 class="page-header">{$aLang.plugin.prof.user_list_prof}: <span>{$oProf->getProfName()|escape:'html'}{if $aPaging} ({$aPaging.iCount}){/if}</span></h2>

{include file='user_list.tpl' aUsersList=$aUsersProf}

{include file='footer.tpl'}