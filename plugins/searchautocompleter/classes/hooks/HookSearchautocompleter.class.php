<?php
/*
  SearchAutoCompleter plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

class PluginSearchautocompleter_HookSearchautocompleter extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('init_action', 'AddStylesAndJS');
  }

  // ---

  public function AddStylesAndJS () {
    $sTemplateWebPath = Plugin::GetTemplateWebPath (__CLASS__);
    $this -> Viewer_AppendScript ($sTemplateWebPath . 'js/init.js');
  }

}

?>