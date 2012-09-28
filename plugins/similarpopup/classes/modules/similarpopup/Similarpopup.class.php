<?php
/*
  Similarpopup plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimilarpopup_ModuleSimilarpopup extends Module {
  protected $oMapper = null;
  
  // ---

  public function Init () {
    $this -> oMapper = Engine::GetMapper (__CLASS__);
  }
  
  // ---

  function GetSimilarTopicsByTopic (ModuleTopic_EntityTopic $currentTopic, $countTopics = 10, $oOrderBy, $oOrderByDirection) {
    if ($currentTopic == null) {
      return array ();
    }

    $key = "similar_topics_by_tags_for_" . $currentTopic -> getId() . "_" . $countTopics . "_" . $oOrderBy . "_" . $oOrderByDirection;

    if ($content = $this -> Cache_Get ($key)) {
      return $content;
    }

    $topicsId = $this -> oMapper -> getTopicIdForTags (
      $currentTopic -> getTagsArray (),
      $countTopics + 1,
      $oOrderBy,
      $oOrderByDirection
    );

    $topics = $this -> Topic_GetTopicsAdditionalData ($topicsId,
      array (
        'user' => array (),
        'blog' => array (
          'owner' => array ()
        )
      )
    );

    $returnValue = array ();
    if (is_array ($topics)) {
      foreach ($topics as $iTopicId => $oTopic) {
        if ($oTopic -> getId () != $currentTopic -> getId ()) {
          $returnValue [] = $oTopic;
        }
      }
    }

    $this -> Cache_Set ($returnValue, $key, array ('topic_update'), 60 * 10);

    return $returnValue;
  }
  
}

?>