{include file='header.tpl'}

  <div class="SearchContainer">

    <h2 class="page-header">{$aLang.search_results}</h2>

    <form action="{router page='search'}{$aReq.sType}/" method="GET" class="search">
      {hook run='search_form_begin'}
      <input type="text" value="{$aReq.q|escape:'html'}" name="q" placeholder="{$aLang.plugin.simplesearch.People_Search_Field_Tip}" maxlength="255" id="SS_SearchField" class="input-text" />
      <input type="submit" value="{$aLang.search_submit}" title="{$aLang.search_submit}" class="input-submit btn btn-primary" />
      {hook run='search_form_end'}
    </form>

    {include file="{$aTemplatePathPlugin['simplesearch']}actions/ActionSearch/switcher.tpl"}

    {if $bIsResults}
      {if $aReq.sType == 'topics'}
      
        {* here we make our own topic_list.tpl coz we need special headers that will describe found info *}
      
        {assign var="sPreviousMatch" value=""}

        {foreach from=$aTopics item=oTopic name="aTopicsCycle"}
          {assign var="sVal" value="s`$aMatching[$smarty.foreach.aTopicsCycle.iteration-1]`"}
          {if $sPreviousMatch!=$sVal}
          
            {* show title of current search match (strict or not and where information was found) *}
            <div class="TitleWhereFound">
              {$aLang.plugin.simplesearch.Search_Found_By.$sVal}
              {$aLang.plugin.simplesearch.Search_Found}
            </div>
            
            {assign var="sPreviousMatch" value=$sVal}
            
          {/if}
          
          {include file="topic_topic.tpl" bTopicList=true}
        {/foreach}

        {include file='paging.tpl' aPaging="$aPaging"}
        
      {elseif $aReq.sType == 'comments'}
      
        {* here we make our own comment_list.tpl coz we need special headers that will describe found info *}
      
        {assign var="sPreviousMatch" value=""}
        
        {foreach from=$aComments item=oComment name="aCommentsCycle"}
          {assign var="sVal" value="s`$aMatching[$smarty.foreach.aCommentsCycle.iteration-1]`"}
          {if $sPreviousMatch!=$sVal}
          
            {* show title of current search match (strict or not and where information was found) *}
            <div class="TitleWhereFound">
              {$aLang.plugin.simplesearch.Search_Found_By.$sVal}
              {$aLang.plugin.simplesearch.Search_Found}
            </div>
            
            {assign var="sPreviousMatch" value=$sVal}
            
          {/if}
          
          {include file="comment_list.tpl" aComments=array($oComment) aPaging=false}
        {/foreach}

        {include file='paging.tpl' aPaging="$aPaging"}
        
      {else}
        {hook run='search_result' sType=$aReq.sType}
        
      {/if}
    {else}
      {$aLang.search_results_empty}
    {/if}
    
  </div>

{include file='footer.tpl'}