{include file='header.tpl'}

  <h2 class="page-header">{$aLang.search}</h2>

  {hook run='search_begin'}

  <form action="{router page='search'}topics/" class="search" method="GET">
    {hook run='search_form_begin'}
    
    <input type="text" placeholder="{$aLang.search}" maxlength="255" name="q" class="input-text" id="SS_SearchField">
    <input type="submit" value="{$aLang.search_submit}" title="{$aLang.search_submit}" class="input-submit btn btn-primary">
    
    {hook run='search_form_end'}
  </form>

  {hook run='search_end'}

{include file='footer.tpl'}