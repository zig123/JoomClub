
  <!-- Simplesearch plugin -->
  <div class="block SS_Peoplesearch">
    <header class="block-header sep">
      <h3>{$aLang.plugin.simplesearch.People_Search}</h3>
    </header>
    
    <form action="{router page='search'}people/" method="GET" class="search">
      <input type="text" value="" name="q" placeholder="{$aLang.plugin.simplesearch.People_Search_Field_Tip}" class="input-text" />
      <input type="submit" value="{$aLang.search_submit}" title="{$aLang.search_submit}" class="input-submit btn btn-primary" />
      <label><input type="checkbox" value="1" checked="checked" name="strict" />{$aLang.plugin.simplesearch.People_Search_Strict_Search}</label>
    </form>
    
    <small>
      {$aLang.plugin.simplesearch.People_Search_Tip}
    </small>
  </div>
  <!-- /Simplesearch plugin -->
