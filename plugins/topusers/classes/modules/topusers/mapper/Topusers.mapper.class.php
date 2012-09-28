<?php
	  
class PluginTopusers_ModuleTopusers_MapperTopusers extends Mapper {
	
	public function GetTopUserByTopic($limit) {
		$sql = "select user_id, count(*) as count
				from ".Config::Get("db.table.topic")."
				group by user_id
				order by count desc
				limit $limit";
		$aPL=array();
		if ($aRows=$this->oDb->select($sql)) {
			
			foreach ($aRows as $aRow) {
				$aPL[]=Engine::GetEntity('PluginTopusers_Topusers',$aRow);
			}
		}
		return $aPL;	
	}
	
	public function GetTopUserByComments($limit) {
		$sql = "select user_id, count(*) as count
				from ".Config::Get("db.table.comment")."
				where comment_delete = '0'
				group by user_id
				order by count desc
				limit $limit";
		$aPL=array();
		if ($aRows=$this->oDb->select($sql)) {
			
			foreach ($aRows as $aRow) {
				$aPL[]=Engine::GetEntity('PluginTopusers_Topusers',$aRow);
			}
		}
		return $aPL;	
	}	
}
?>


