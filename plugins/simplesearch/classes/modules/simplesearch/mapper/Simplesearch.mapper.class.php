<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimplesearch_ModuleSimplesearch_MapperSimplesearch extends Mapper {

  public function GetTopicsByQuery ($sQuery, $iPage, $iPerPage, $sSubQuery) {
    $sql = '
      SELECT DISTINCT t.topic_id,
      CASE
        {WHEN (LOWER(tc.topic_text) REGEXP ?) THEN 4} -- strict
        {WHEN (LOWER(t.topic_title) REGEXP ?) THEN 3}
        {WHEN (LOWER(tc.topic_text) REGEXP ?) THEN 2} -- not strict
        {WHEN (LOWER(t.topic_title) REGEXP ?) THEN 1}
        WHEN 1 = 1 THEN 0 -- for compability
      END AS weight
      FROM
        `' . Config::Get ('db.table.topic') . '` AS t,
        `' . Config::Get ('db.table.topic_content') . '` AS tc
      WHERE
        t.topic_publish = 1
      AND
        t.topic_id = tc.topic_id
      AND
        (
          (LOWER(t.topic_title) REGEXP ?) -- strict
          OR
          (LOWER(tc.topic_text) REGEXP ?)
          {OR
          (LOWER(t.topic_title) REGEXP ?)} -- not strict
          {OR
          (LOWER(tc.topic_text) REGEXP ?)}
        )
      ORDER BY
        ' . (isset ($sSubQuery) ? 'weight DESC, ' : '')
          . 't.' . implode (', t.', Config::Get ('plugin.simplesearch.Topics_Order')) . '
      LIMIT ?d, ?d
    ';
    // maybe use LEFT JOIN for other topic types if them doesnt have content?
    $iTotalCount = 0;
    $aTopicsIds = array ();
    $aMatching = array ();
    
    if ($aResult = $this -> oDb -> selectPage (
          $iTotalCount,
          $sql,
          (isset ($sSubQuery) ? $sQuery : DBSIMPLE_SKIP),   // strict
          (isset ($sSubQuery) ? $sQuery : DBSIMPLE_SKIP),
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP), // not strict
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP),
          $sQuery,
          $sQuery,
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP),
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP),
          ($iPage - 1) * $iPerPage,
          $iPerPage
        )
      ) {
      foreach ($aResult as $curTopic) {
        $aTopicsIds [] = $curTopic ['topic_id'];
        $aMatching [] = $curTopic ['weight'];
      }
    }
    return array (
      'result' => $aTopicsIds,
      'count' => $iTotalCount,
      'matches' => $aMatching
    );
  }
  
  // ---
  
  public function GetCommentsByQuery ($sQuery, $iPage, $iPerPage, $sSubQuery) {
    $sql = '
      SELECT DISTINCT c.comment_id,
      CASE
        {WHEN (LOWER(c.comment_text) REGEXP ?) THEN 4} -- strict
        {WHEN (LOWER(c.comment_text) REGEXP ?) THEN 2} -- not strict
        WHEN 1 = 1 THEN 0 -- for compability
      END AS weight
      FROM
        `' . Config::Get ('db.table.comment') . '` AS c
      WHERE
        c.comment_delete = 0
      AND
        c.target_type = "topic"
      AND
        (
          (LOWER(c.comment_text) REGEXP ?) -- strict
          {OR
          (LOWER(c.comment_text) REGEXP ?)} -- not strict
        )
      ORDER BY
        ' . (isset ($sSubQuery) ? 'weight DESC, ' : '')
          . 'c.' . implode (', c.', Config::Get ('plugin.simplesearch.Comments_Order')) . '
      LIMIT ?d, ?d
    ';
    $iTotalCount = 0;
    $aCommentsIds = array ();
    $aMatching = array ();
    
    if ($aResult = $this -> oDb -> selectPage (
          $iTotalCount,
          $sql,
          (isset ($sSubQuery) ? $sQuery : DBSIMPLE_SKIP),     // strict
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP),  // not strict
          $sQuery,
          (isset ($sSubQuery) ? $sSubQuery : DBSIMPLE_SKIP),  // not strict
          ($iPage - 1) * $iPerPage,
          $iPerPage
        )
      ) {
      foreach ($aResult as $curComment) {
        $aCommentsIds [] = $curComment ['comment_id'];
        $aMatching [] = $curComment ['weight'];
      }
    }
    return array (
      'result' => $aCommentsIds,
      'count' => $iTotalCount,
      'matches' => $aMatching
    );
  }
  
  // ---
  
  public function GetPeopleByQuery ($sQuery, $iPage, $iPerPage) {
    $sql = '
      SELECT user_id,
      CASE
        WHEN (LOWER(user_login) REGEXP ?) THEN 1
        WHEN (LOWER(user_profile_name) REGEXP ?) THEN 2
        WHEN (LOWER(user_profile_country) REGEXP ?) THEN 3
        WHEN (LOWER(user_profile_city) REGEXP ?) THEN 4
        WHEN (LOWER(user_profile_about) REGEXP ?) THEN 8
        WHEN 1 = 1 THEN 0
      END AS matchnum
      FROM
        `' . Config::Get ('db.table.user') . '`
      WHERE
        user_activate = 1
      AND
        (
          (LOWER(user_login) REGEXP ?)
          OR
          (LOWER(user_profile_name) REGEXP ?)
          OR
          (LOWER(user_profile_country) REGEXP ?)
          OR
          (LOWER(user_profile_city) REGEXP ?)
          OR
          (LOWER(user_profile_about) REGEXP ?)
        )
      ORDER BY
        ' . implode (', ', Config::Get ('plugin.simplesearch.People_Order')) . '
      LIMIT ?d, ?d
    ';
    $iTotalCount = 0;
    $aPeopleIds = array ();
    $aMatching = array ();
    
    if ($aResult = $this -> oDb -> selectPage (
          $iTotalCount,
          $sql,
          $sQuery,
          $sQuery,
          $sQuery,
          $sQuery,
          $sQuery,
          
          $sQuery,
          $sQuery,
          $sQuery,
          $sQuery,
          $sQuery,
          ($iPage - 1) * $iPerPage,
          $iPerPage
        )
      ) {
      foreach ($aResult as $curUser) {
        $aPeopleIds [] = $curUser ['user_id'];
        $aMatching [] = $curUser ['matchnum'];
      }
    }
    return array (
      'result' => $aPeopleIds,
      'count' => $iTotalCount,
      'matches' => $aMatching
    );
  }

}

?>