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

class PluginUserads_ActionSettings extends ActionPlugin
{

    protected $sMenuItemSelect = 'userads';
    protected $oUserCurrent = null;

    public function Init()
    {
        if (($this->oUserCurrent = $this->User_GetUserCurrent() and $this->oUserCurrent->isAdministrator())) {
            $this->Viewer_Assign('sTemplateWebPathPlugin', Plugin::GetTemplateWebPath(__CLASS__));
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));
            return Router::Action('error');
        }
    }

    protected function RegisterEvent()
    {
        $this->AddEventPreg('/^settings$/i', '/^$/i', 'EventSettings');
        $this->AddEventPreg('/^settings$/i', '/^add$/i', 'SubmitAdd');
    }

    protected function EventSettings()
    {
        if (!$this->oUserCurrent) {
            $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));
            return Router::Action('error');
        }
        $sUserId = $this->oUserCurrent->getId();
        $aLinks = $this->PluginUserads_Userads_GetUseradsSettingsByUser($sUserId);
        $positions = Config::Get('config.userads.positions');

        foreach($positions as $pos){
            $aLinks ["link"][$pos] = !empty($aLinks ["link"][$pos]) ? $aLinks ["link"][$pos] : '';
            $aLinks ["text_img"][$pos] = !empty($aLinks ["text_img"][$pos]) ? ($aLinks ["text_img"][$pos]) : '';
            $aLinks ["is_image"][$pos] = (!empty($aLinks ["is_image"][$pos])) ? 1 : 0;
        }

        $this->Viewer_Assign('positions', $positions);
        $this->Viewer_Assign('aLinks', $aLinks);

        $this->SetTemplateAction('settings');
    }

    protected function SubmitAdd()
    {
        if (isPost('userads')) {


            $aLinks = getRequest('userads', array());

            $positions = Config::Get('config.userads.positions');

            foreach($positions as $pos){
                $aLinks ["link"][$pos] = strip_tags(str_replace('http://', '',$aLinks["link"][$pos]));
                $aLinks ["text_img"][$pos] = strip_tags(str_replace('http://', '',$aLinks["text_img"][$pos]));
                $aLinks ["is_image"][$pos] = (!empty($aLinks ["is_image"][$pos])) ? 1 : 0;
            }

            $oSettings = new stdClass();
            $oSettings->userId = $this->oUserCurrent->getId();
            $oSettings->settings = serialize($aLinks);

            if ($this->PluginUserads_Userads_AddSettings($oSettings)) {
                $this->Message_AddNotice($this->Lang_Get('plugin.userads.userads_create_submit_add_ok'));
                header('location:/settings/userads/');
            } else {
                $_REQUEST['userads'] = getRequest('userads');
            }
        } else {
            header('location:/settings/userads/');
        }
    }

    public function EventShutdown()
    {
        $this->Viewer_Assign('sMenuItemSelect', $this->sMenuItemSelect);
    }

}

?>
