<?php
/*
  Similarpopup plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimilarpopup_HookSimilarpopup extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('init_action', 'AddStylesAndJS');
    $this -> AddHook ('template_topic_show_end', 'TopicShowSimilar');
  }
  
  // ---

  public function AddStylesAndJS () {
    $sTemplateWebPath = Plugin::GetTemplateWebPath (__CLASS__);
  }

  // ---

  public function TopicShowSimilar ($Vars) {
    $oTopic = @$Vars ['topic'];
    if (!$oTopic) return false;
    
    $aSimilarTopics = $this -> PluginSimilarpopup_Similarpopup_GetSimilarTopicsByTopic (
      $oTopic,
      Config::Get ('plugin.similarpopup.Show_Topics_Count'),
      Config::Get ('plugin.similarpopup.Order_By'),
      Config::Get ('plugin.similarpopup.Order_By_Direction')
    );
    $this -> Viewer_Assign ('aSimilarTopics', $aSimilarTopics);
    
    return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'similar.tpl');
  }
  
}

?>