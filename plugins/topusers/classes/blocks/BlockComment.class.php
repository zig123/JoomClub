<?php

class PluginTopusers_Blockcomment extends Block {

	public function Exec() {

		$aResult=$this->PluginTopusers_ModuleTopusers_GetTopUserByComments(Config::Get("plugin.topusers.blocks.comment.limit"));	
		
		$oViewer=$this->Viewer_GetLocalViewer();
		$oViewer->Assign('aUsersList',$aResult);
		
		$this->Viewer_Assign('UserList',$oViewer->Fetch(Plugin::GetTemplatePath(__CLASS__) . "list.comment.".Config::Get("plugin.topusers.blocks.comment.type").".tpl"));
		
		return FALSE;
		
	}
}
?>