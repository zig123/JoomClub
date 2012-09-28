<?php

/* -------------------------------------------------------
*
*   LiveStreet (v.1.0)
*   Plugin User Ads (v.0.1)
*   Copyright © 2012 Arkadiy Sedelnikov
*
* --------------------------------------------------------
*
*   Plugin Page: http://argens.ru
*
* ---------------------------------------------------------
*
*   Created from plugins "Ad units" and "Cause Edit" by Bishovec Nikolay
*
---------------------------------------------------------
*/

class PluginUserads_ModuleUserads_MapperUserads extends Mapper
{

    public function GetUseradsSettingsByUser($sUserId)
    {
        $sql = "SELECT `settings` FROM " . Config::Get('db.table.userads') . " WHERE user_id = ? ";

        $aCollection = array();
        if ($aRows = $this->oDb->select($sql, $sUserId)) {
           $aCollection = Engine::GetEntity('PluginUserads_Userads', $aRows[0])->_getDataOne('settings');
           $aCollection = unserialize($aCollection);
        }
        return $aCollection;
    }

    public function AddSettings($oSettings)
    {
        $this->DeleteSettings($oSettings->userId);

        $sql = "INSERT INTO " . Config::Get('db.table.userads') . "
			(
            user_id,
  			settings
			)
			VALUES(?d, ?)
		";
        if ($iId = $this->oDb->query($sql, $oSettings->userId, $oSettings->settings)) {
            return true;
        }
        return false;
    }

    private function DeleteSettings($userId)
    {
        $sql = "DELETE FROM " . Config::Get('db.table.userads') . " WHERE `user_id` = ? ";
        return $this->oDb->query($sql, $userId);
    }

}

?>
