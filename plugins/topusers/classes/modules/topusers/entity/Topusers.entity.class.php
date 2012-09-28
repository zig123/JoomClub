<?php

class PluginTopusers_ModuleTopusers_EntityTopusers extends Entity
{
	public function getUserId() {
		return $this->_getDataOne('user_id');
	}
	
	public function getCount() {
		return $this->_getDataOne('count');
	}

	public function getUser() {
		if (!$this->_getDataOne('ouser')) {
			$this->_aData['ouser']=$this->User_GetUserById($this->getUserId());
		}
		return $this->_getDataOne('ouser');
	}
	

}
?>