<?php

class PluginLastusercomments_HookLastusercomments extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('template_profile_whois_lastusercomments', 'ProfileCommentsList');
  }
	

  public function ProfileCommentsList ($Vars) {
    $oUserProfile = $Vars ['oUserProfile'];
    
    if (Config::Get ('plugin.lastusercomments.Show_Last_Comments_Count') != 0) {
      $LastComments = $this -> Comment_GetCommentsByUserId ($oUserProfile -> getId (), 'topic', 1, Config::Get ('plugin.lastusercomments.Show_Last_Comments_Count'));
      $this -> Viewer_Assign ('oLastComments', $LastComments ['collection']);
    }
    
    return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'lastusercomments.tpl');
  }
  
}

?>