<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimplesearch_ModuleSimplesearch extends Module {
  protected $oMapper = null;
  
  // ---

  public function Init () {
    $this -> oMapper = Engine::GetMapper (__CLASS__);
  }
  
  // ---
  
  public function GetTopicsByQuery ($sQuery, $iPage, $iPerPage, $sSubQuery) {
    return $this -> GetUsingCache (
                                    array (
                                            $this -> oMapper,
                                            'GetTopicsByQuery'
                                          ),
                                    'topic_update, topic_new',              // cache tags
                                    60 * 60 * 24 * 7,                       // cache live time - 7 days
                                    $sQuery, $iPage, $iPerPage, $sSubQuery  // list of parameters
                                  );
  }
  
  // ---
  
  public function GetCommentsByQuery ($sQuery, $iPage, $iPerPage, $sSubQuery) {
    return $this -> GetUsingCache (
                                    array (
                                            $this -> oMapper,
                                            'GetCommentsByQuery'
                                          ),
                                    array (
                                      'comment_new_topic',                  // new comment
                                      'comment_update_status_topic',        // deleted or published
                                      'comment_update',                     // general update
                                      'comment_update_rating_topic'         // when rating of comment was changed
                                    ),
                                    60 * 60 * 24 * 7,                       // 7 days
                                    $sQuery, $iPage, $iPerPage, $sSubQuery
                                  );
  }
  
  // ---
  
  public function GetPeopleByQuery ($sQuery, $iPage, $iPerPage) {
    return $this -> GetUsingCache (
                                    array (
                                            $this -> oMapper,     // mapper object
                                            'GetPeopleByQuery'    // function to call
                                          ),
                                    'user_new, user_update',      // tags (string or array)
                                    60 * 60 * 24 * 7,             // cache live time
                                    $sQuery, $iPage, $iPerPage    // additional parameters that should be set
                                  );
  }
  
  // ---

  // Little wrapper for Cache module
  // Can call user function through cache (check if already cache exists or call function and save result)
  //
  // Usage example:
  // GetUsingCache ('ClassName::FunctionName', 'tag1, tag2', 60 * 60 * 1, 'SELECT * FROM table LIMIT 1', $aParams2);
  // or
  // GetUsingCache (array ($this -> oMapper, 'FunctionName'), 'tag1, tag2', 60 * 60 * 1, 'SELECT * FROM table', $aParam2, $aParam3);
  //
  // (P) PSNet, 2008 - 2012
  // http://psnet.lookformp3.net/
  // http://livestreet.ru/profile/PSNet/
  // http://livestreetcms.com/profile/PSNet/
  //
  public function GetUsingCache (
                                  $FunctionToCall = null,
                                  $aTags = array (),
                                  $iTime = 3600             // 60 * 60 * 1 == 1 hour
                                ) {
    $Params = array_slice (func_get_args (), 3);
    $ArgsNum = count ($Params);
    
    $QueryHash = '';
    if ($ArgsNum > 0) {
      for ($i = 0; $i < $ArgsNum; $i ++) {
        $QueryHash .= serialize ($Params [$i]);
      }
    }
    
    $FuncName = (string) $FunctionToCall;
    if ((is_array ($FunctionToCall)) and (isset ($FunctionToCall [1])) and (is_string ($FunctionToCall [1]))) {
      $FuncName = $FunctionToCall [1];
    }
    $Tags = (array) $aTags;
    if (!is_array ($aTags)) {
      $Tags = trim (preg_replace ('/(\s{1,})/', '', $aTags));
      $Tags = explode (',', $Tags);
    }
    $Time = (int) $iTime;
    
    $Cache_Key = $FuncName . '_' . $QueryHash;
    if (false === ($Data = $this -> Cache_Get ($Cache_Key))) {
      $Data = call_user_func_array ($FunctionToCall, $Params);
      if ($Data !== false) {
        $this -> Cache_Set ($Data, $Cache_Key, $Tags, $Time);
      }
    }
    return $Data;
  }

}

?>