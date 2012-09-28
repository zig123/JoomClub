<?php

class PluginTopusers_Blockrating extends Block {

	public function Exec() {

		$aResult=$this->User_GetUsersByFilter(array('activate' =>1),array('user_rating'=>'desc'),1,Config::Get("plugin.topusers.blocks.rating.limit"));
		$oViewer=$this->Viewer_GetLocalViewer();
		$oViewer->Assign('aUsersList',$aResult['collection']);
				
		$this->Viewer_Assign('UserList',$oViewer->Fetch(Plugin::GetTemplatePath(__CLASS__) . "list.rating.".Config::Get("plugin.topusers.blocks.rating.type").".tpl"));
		
		return FALSE;
		
	}
}
?>