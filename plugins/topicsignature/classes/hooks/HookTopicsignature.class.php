<?php
/*
  Topicsignature plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginTopicsignature_HookTopicsignature extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('init_action', 'AddStylesAndJS');
    $this -> AddHook ('template_topic_show_end', 'TopicShowEnd');
  }
	
  // ---

  public function AddStylesAndJS () {
    $sTemplateWebPath = Plugin::GetTemplateWebPath (__CLASS__);
    $this -> Viewer_AppendStyle ($sTemplateWebPath . 'css/style.css');
  }

  // ---
	
  public function TopicShowEnd ($Vars) {
    if ((!isset ($Vars)) or (!isset ($Vars ['topic']))) {
      return false;
    }
    $CurTopic = $Vars ['topic'];
    $GetTopicsUser = $CurTopic -> getUser ();
    $GetUserName = $GetTopicsUser -> getLogin ();
    
    $TplTLoad = '';
    
    $TrustedUsers = Config::Get ('plugin.topicsignature.Trusted_Users');
    for ($ic = 0; $ic < count ($TrustedUsers); $ic ++) {
      if ($GetUserName == $TrustedUsers [$ic] ['username']) {
        $TplTLoad = $TrustedUsers [$ic] ['tpl_filename'];
        break;
      }
    }
    if (!$TplTLoad) return false;

    $this -> Viewer_Assign ('oTopicsUser', $GetTopicsUser);
    return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'users_signs/' . $TplTLoad . '.tpl');
  }

}

?>