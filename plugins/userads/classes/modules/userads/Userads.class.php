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

class PluginUserads_ModuleUserads extends Module
{

    protected $oMapper;
    protected $aBadurl = array('admin', 'settings', 'openid_settings');

    public function Init()
    {
        $this->oMapper = Engine::GetMapper(__CLASS__);
    }


    public function AddSettings($oSettings)
    {
        if ($sId = $this->oMapper->AddSettings($oSettings)) {
            return true;
        }
        return false;
    }

    public function GetUseradsSettingsByUser($sUserId)
    {
        return $this->oMapper->GetUseradsSettingsByUser($sUserId);
    }
}

?>
