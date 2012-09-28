<?php

class PluginTopusers_Blocktopic extends Block {

	public function Exec() {

		$aResult=$this->PluginTopusers_ModuleTopusers_GetTopUserByTopic(Config::Get("plugin.topusers.blocks.topic.limit"));	
		$oViewer=$this->Viewer_GetLocalViewer();
		$oViewer->Assign('aUsersList',$aResult);
		
		$this->Viewer_Assign('UserList',$oViewer->Fetch(Plugin::GetTemplatePath(__CLASS__) . "list.topic.".Config::Get("plugin.topusers.blocks.topic.type").".tpl"));
		
		return FALSE;
		
	}
}
?>