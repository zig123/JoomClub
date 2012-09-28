<?php

class PluginTopusers_ModuleTopusers extends Module {
	protected $oMapper;

	public function Init() {
		$this->oMapper=Engine::GetMapper(__CLASS__);
	}
	
	public function GetTopUserByTopic($limit) {
		return $this->oMapper->GetTopUserByTopic($limit);
	}
	
	public function GetTopUserByComments($limit) {
		return $this->oMapper->GetTopUserByComments($limit);
	}
	
}
?>