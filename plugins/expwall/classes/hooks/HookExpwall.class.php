<?php

/* -------------------------------------------------------
 *
 *   LiveStreet (v1.x)
 *   Plugin Expanded wall (v.0.2.1)
 *   Copyright © 2011 Bishovec Nikolay
 *
 * --------------------------------------------------------
 *
 *   Plugin Page: http://netlanc.net
 *   Contact e-mail: netlanc@yandex.ru
 *
  ---------------------------------------------------------
 */

class PluginExpwall_HookExpwall extends Hook
{

    public function RegisterHook()
    {
        $this->AddHook('template_main_menu_item', 'MenuMain', __CLASS__);
        $this->AddHook('template_profile_whois_end', 'ProfileWhois', __CLASS__);
    }

    public function ProfileWhois($aVars)
    {
        $oUserProfile = $aVars['oUserProfile'];
        $aWall=$this->Wall_GetWall(array('wall_user_id'=>$oUserProfile->getId(),'pid'=>null),array('id'=>'desc'),1,Config::Get('module.wall.per_page'));
        $this->Viewer_Assign('aWall',$aWall['collection']);
        $this->Viewer_Assign('iCountWall',$aWall['count']);

        return $this->Viewer_Fetch(Plugin::GetTemplatePath('expwall') . 'profile_whois.tpl');
    }

    public function MenuMain()
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath('expwall') . 'main_menu.tpl');
    }

}

?>
