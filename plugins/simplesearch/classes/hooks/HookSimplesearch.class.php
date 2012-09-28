<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSimplesearch_HookSimplesearch extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('init_action', 'AddStylesAndJS');
    $this -> AddHook ('template_body_begin', 'BodyBegin');
  }
  
  // ---

  public function AddStylesAndJS () {
    $sTemplateWebPath = Plugin::GetTemplateWebPath (__CLASS__);
    $this -> Viewer_AppendStyle ($sTemplateWebPath . 'css/style.css');
  }
  
  // ---
	
  public function BodyBegin () {
    if (Config::Get ('plugin.simplesearch.Enable_Auto_Completer')) {
      return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'body_begin.tpl');
    }
    return false;
  }

}

?>