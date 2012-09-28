<?php
class PluginLastusertopics_HookLastusertopics extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('template_profile_whois_lastusertopics', 'ProfileWhois');
  }
	
  // ---

  public function ProfileWhois ($Vars) {
    $oUserProfile = $Vars ['oUserProfile'];
    
    // get last topics
    if (Config::Get ('plugin.lastusertopics.Show_Last_Topics_Count') != 0) {
      $aFilter = array (
        'topic_publish' => 1,
        'user_id' => $oUserProfile -> getId (),
      );
      $LastTopics = $this -> Topic_GetTopicsByFilter ($aFilter, 1, Config::Get ('plugin.lastusertopics.Show_Last_Topics_Count'));
      $this -> Viewer_Assign ('oLastTopics', $LastTopics ['collection']);
    }
    
    return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'lastusertopics.tpl');
  }
  
}

?>