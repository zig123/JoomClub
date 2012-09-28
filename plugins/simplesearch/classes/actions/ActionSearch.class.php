<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimplesearch_ActionSearch extends ActionPlugin {
  protected $OriginalQuerySafe = null;
  protected $SQL_Search_Query = null;
  protected $SQL_Not_Strict_Sub_Query = null;
  protected $iCurrentPage = 1;
  protected $iPerPage = 20;
  protected $iResultCount = 0;
  
  // ---

  public function Init () {
    $this -> SetDefaultEvent ('index');
  }
	
  // ---
	
  protected function RegisterEvent () {
    $this -> AddEvent ('index', 'IndexEvent');
    $this -> AddEvent ('topics', 'TopicsEvent');
    $this -> AddEvent ('comments', 'CommentsEvent');
    $this -> AddEvent ('people', 'PeopleEvent');
  }
	
  // ---
  
  public function IndexEvent () {}
  
  // ---
	
  public function TopicsEvent () {
    $this -> SetTemplateAction ('results');
    if (!Config::Get ('plugin.simplesearch.Enable_Topics_Search')) {
      $this -> Message_AddErrorSingle (
        $this -> Lang_Get ('plugin.simplesearch.Topics_Search_Is_Disabled'),
        $this -> Lang_Get ('plugin.simplesearch.Error')
      );
      return false;
    }
    if (!$this -> PrepareSearchQuery ()) return false;
    
    // make sql query
    $aResult = $this -> PluginSimplesearch_Simplesearch_GetTopicsByQuery (
      $this -> SQL_Search_Query,
      $this -> iCurrentPage,
      $this -> iPerPage,
      $this -> SQL_Not_Strict_Sub_Query
    );
    
    $aTopics = $this -> Topic_GetTopicsAdditionalData ($aResult ['result']);
    
    // highlight searched words in texts
    $RegexpForHighlight = $this -> BuildPhpRegExpFromSQLExp ();
    
    foreach ($aTopics as $oTopic) {
      $sText = $oTopic -> getText ();
      $sTextShort = $oTopic -> getTextShort ();
      $oTopic -> setText ($this -> ReplaceSearchedItems ($RegexpForHighlight, $sText));
      $oTopic -> setTextShort ($this -> ReplaceSearchedItems ($RegexpForHighlight, $sTextShort));
    }
    
    $aPaging = $this -> Viewer_MakePaging (
      $aResult ['count'],
      $this -> iCurrentPage,
      $this -> iPerPage,
      Config::Get ('pagination.pages.count'),
      Router::GetPath ('search') . strtolower (Router::GetActionEvent ()),
      array ('q' => $this -> OriginalQuerySafe)
    );
    
    $this -> iResultCount = $aResult ['count'];
    
    $this -> Viewer_AddHtmlTitle ($this -> Lang_Get ('plugin.simplesearch.Search_On') . $this -> OriginalQuerySafe);
    $this -> Viewer_Assign ('aTopics', $aTopics);
    $this -> Viewer_Assign ('aPaging', $aPaging);
    $this -> Viewer_Assign ('aMatching', $aResult ['matches']);
  }
	
  // ---
	
  public function CommentsEvent () {
    $this -> SetTemplateAction ('results');
    if (!Config::Get ('plugin.simplesearch.Enable_Comments_Search')) {
      $this -> Message_AddErrorSingle (
        $this -> Lang_Get ('plugin.simplesearch.Comments_Search_Is_Disabled'),
        $this -> Lang_Get ('plugin.simplesearch.Error')
      );
      return false;
    }
    if (!$this -> PrepareSearchQuery ()) return false;
    
    // make sql query
    $aResult = $this -> PluginSimplesearch_Simplesearch_GetCommentsByQuery (
      $this -> SQL_Search_Query,
      $this -> iCurrentPage,
      $this -> iPerPage,
      $this -> SQL_Not_Strict_Sub_Query
    );
    
    $aComments = $this -> Comment_GetCommentsAdditionalData ($aResult ['result']);
    
    // highlight searched words in texts
    $RegexpForHighlight = $this -> BuildPhpRegExpFromSQLExp ();
    
    foreach ($aComments as $oComment) {
      $sText = $oComment -> getText ();
      $oComment -> setText ($this -> ReplaceSearchedItems ($RegexpForHighlight, $sText));
    }
    
    $aPaging = $this -> Viewer_MakePaging (
      $aResult ['count'],
      $this -> iCurrentPage,
      $this -> iPerPage,
      Config::Get ('pagination.pages.count'),
      Router::GetPath ('search') . strtolower (Router::GetActionEvent ()),
      array ('q' => $this -> OriginalQuerySafe)
    );
    
    $this -> iResultCount = $aResult ['count'];
    
    $this -> Viewer_AddHtmlTitle ($this -> Lang_Get ('plugin.simplesearch.Search_On') . $this -> OriginalQuerySafe);
    $this -> Viewer_Assign ('aComments', $aComments);
    $this -> Viewer_Assign ('aPaging', $aPaging);
    $this -> Viewer_Assign ('aMatching', $aResult ['matches']);
  }
  
  // ---
	
  public function PeopleEvent () {
    $this -> SetTemplateAction ('people');
    if (!Config::Get ('plugin.simplesearch.Enable_People_Search')) {
      $this -> Message_AddErrorSingle (
        $this -> Lang_Get ('plugin.simplesearch.People_Search_Is_Disabled'),
        $this -> Lang_Get ('plugin.simplesearch.Error')
      );
      return false;
    }
    if (!$this -> PrepareSearchQuery (true)) return false;
    
    // make sql query
    $aResult = $this -> PluginSimplesearch_Simplesearch_GetPeopleByQuery (
      $this -> SQL_Search_Query,
      $this -> iCurrentPage,
      $this -> iPerPage
    );
    
    $aUsers = $this -> User_GetUsersAdditionalData ($aResult ['result']);
    
    // highlight searched words in texts
    $RegexpForHighlight = $this -> BuildPhpRegExpFromSQLExp ();
    
    $i = 0;
    foreach ($aUsers as $oUser) {
      $sOriginalText = '';
      switch ($aResult ['matches'] [$i]){
        case 8:
          $sOriginalText = $oUser -> getProfileAbout ();
          break;
        case 4:
          $sOriginalText = $oUser -> getProfileCity ();
          break;
        case 3:
          $sOriginalText = $oUser -> getProfileCountry ();
          break;
        case 2:
          $sOriginalText = $oUser -> getProfileName ();
          break;
        case 1:
          $sOriginalText = $oUser -> getLogin ();
          break;
        default:
          $sOriginalText = 'error';
      }
      // our own method
      $oUser -> setFoundPlace ($this -> ReplaceSearchedItems ($RegexpForHighlight, $sOriginalText));
      $i ++;
    }
    
    $aPaging = $this -> Viewer_MakePaging (
      $aResult ['count'],
      $this -> iCurrentPage,
      $this -> iPerPage,
      Config::Get ('pagination.pages.count'),
      Router::GetPath ('search') . strtolower (Router::GetActionEvent ()),
      array ('q' => $this -> OriginalQuerySafe)
    );
    
    $this -> iResultCount = $aResult ['count'];
    
    $this -> Viewer_AddHtmlTitle ($this -> Lang_Get ('plugin.simplesearch.Search_On') . $this -> OriginalQuerySafe);
    $this -> Viewer_Assign ('aUsersRating', $aUsers);
    $this -> Viewer_Assign ('aPaging', $aPaging);
    $this -> Viewer_Assign ('aMatching', $aResult ['matches']);
  }
	
  // ---
	
  public function EventShutdown () {
    $aReq = array ();
    $aReq ['q'] = $this -> OriginalQuerySafe;
    $aReq ['sType'] = strtolower (Router::GetActionEvent ());
    
    $aRes = array ();
    $aRes ['aCounts'] = array ();
    if (Config::Get ('plugin.simplesearch.Enable_Topics_Search')) {
      $aRes ['aCounts']['topics'] = '';
    }
    if (Config::Get ('plugin.simplesearch.Enable_Comments_Search')) {
      $aRes ['aCounts']['comments'] = '';
    }
    if (Config::Get ('plugin.simplesearch.Enable_People_Search')) {
      $aRes ['aCounts']['people'] = '';
    }
    $aRes ['aCounts'][$aReq ['sType']] = $this -> iResultCount;
    
    $this -> Viewer_Assign ('aReq', $aReq);
    $this -> Viewer_Assign ('aRes', $aRes);
    $this -> Viewer_Assign ('bIsResults', $this -> iResultCount);
  }
  
  // ---
  
  public function BuildPhpRegExpFromSQLExp () {
    $NewRegexp = str_replace ('[[:<:]]', Config::Get ('plugin.simplesearch.Highlight_Words_Border'), $this -> SQL_Search_Query);
    $NewRegexp = str_replace ('[[:>:]]', Config::Get ('plugin.simplesearch.Highlight_Words_Border'), $NewRegexp);
    $NewRegexp = '/' . $NewRegexp . '/iumUS';
    return $NewRegexp;
  }
  
  // ---
  
  public function ReplaceSearchedItems ($RegExp, $sTextIn) {
    $sText = preg_replace (
                            $RegExp,
                            Config::Get ('plugin.simplesearch.Highlight_Wrapper_Before') .
                            '$0' .
                            Config::Get ('plugin.simplesearch.Highlight_Wrapper_After'),
                            strip_tags ($sTextIn)
                          );
    return $sText;
  }
	
  // ---
	
  public function PrepareSearchQuery ($bAllowGetStrictFromRequest = false) {
    $OriginalSearchString = getRequest ('q');
    if ($bAllowGetStrictFromRequest) {
      $bStrictSearch = getRequest ('strict');
    } else {
      $bStrictSearch = Config::Get ('plugin.simplesearch.Strict_Search_By_Defalut');
    }
    $bStrictSearch = (bool) $bStrictSearch;
    
    // if encoding was broken - try to recover it
    if (!mb_check_encoding ($OriginalSearchString)) {
      $OriginalSearchString = mb_convert_encoding ($OriginalSearchString, 'UTF-8', 'auto');
    }
    
    $OriginalSearchString = trim ($OriginalSearchString);
    $OriginalSearchString = mb_strtolower ($OriginalSearchString, 'UTF-8');
    
    if (!func_check (
                      $OriginalSearchString,
                      'text',
                      Config::Get ('plugin.simplesearch.Min_Length_Of_Search_Query'),
                      Config::Get ('plugin.simplesearch.Max_Length_Of_Search_Query')
                    )) {
      $this -> Message_AddErrorSingle (
        $this -> Lang_Get ('plugin.simplesearch.Search_Query_Is_Wrong'),
        $this -> Lang_Get ('plugin.simplesearch.Error')
      );
      return false;
    }
    
    if (Config::Get ('plugin.simplesearch.Strip_All_Tags')) {
      $OriginalSearchString = strip_tags ($OriginalSearchString);
    } else {
      $OriginalSearchString = $this -> Text_JevixParser ($OriginalSearchString);
    }
    
    // remove not allowed symbols with spaces
    $OriginalSearchString = preg_replace (Config::Get ('plugin.simplesearch.Validate_Search_Query_With'), ' ', $OriginalSearchString);
    
    // replace more than 1 space with one
    $OriginalSearchString = trim (preg_replace ('/\s{2,}/s', ' ', $OriginalSearchString));
    
    $this -> OriginalQuerySafe = $OriginalSearchString;
    
    $OriginalSearchArray = explode (' ', $OriginalSearchString);
    $OriginalSearchArray = array_unique ($OriginalSearchArray);
    
    // here we store all words that we tested for correct length
    $NewSearchArray = array ();
    
    foreach ($OriginalSearchArray as $CurrentWord) {
      if (!func_check (
                        $CurrentWord,
                        'text',
                        Config::Get ('plugin.simplesearch.Min_Length_Of_Search_Word'),
                        Config::Get ('plugin.simplesearch.Max_Length_Of_Search_Word')
                      )) {
        $this -> Message_AddErrorSingle (
          $this -> Lang_Get ('plugin.simplesearch.Search_Word_Is_Wrong') . ' ' . $CurrentWord,
          $this -> Lang_Get ('plugin.simplesearch.Error')
        );
      } else {
        $NewSearchArray [] = $CurrentWord;
      }
    }
    
    //
    // making SQL query
    //
    $SQLQueryArray = array ();
    
    $bAlsoNotStrictSearchAllowed = Config::Get ('plugin.simplesearch.Allow_Not_Strict_Search_Additionally');
    
    // here we will store sub-query for not strict sub search
    $SQLQueryNotStrictString = null;
    
    if (($bStrictSearch) and (!$bAlsoNotStrictSearchAllowed)) {
      // ONLY strict search
      foreach ($NewSearchArray as $NewWord) {
        $SQLQueryArray [] = '[[:<:]]' . $NewWord . '[[:>:]]';
      }
    } elseif (!$bStrictSearch) {
      // allow ALWAYS not strict
      $SQLQueryArray = $NewSearchArray;
    } else {
      //
      // make STRICT search + NOT STRICT additionally
      //
      // make strict query as default
      foreach ($NewSearchArray as $NewWord) {
        $SQLQueryArray [] = '[[:<:]]' . $NewWord . '[[:>:]]';
      }
      // and also make not strict query
      $SQLQueryNotStrictString = implode ('|', $NewSearchArray);
    }
    
    $SQLQueryString = implode ('|', $SQLQueryArray);
    
    // store SQL queries
    $this -> SQL_Search_Query = $SQLQueryString;
    $this -> SQL_Not_Strict_Sub_Query = $SQLQueryNotStrictString;
    
    // get current page and results per page
    $this -> iCurrentPage = intval (preg_replace ('#^page(\d+)$#', '\1', $this -> getParam (0)));
    if (!$this -> iCurrentPage) {
      $this -> iCurrentPage = 1;
    }
    $this -> iPerPage = Config::Get ('plugin.simplesearch.Results_Per_Page');

    return true;
  }
	
}

?>