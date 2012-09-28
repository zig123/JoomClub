<?php

/* -------------------------------------------------------
 *
 *   LiveStreet (v.0.4.2 and 0.5)
 *   Plugin Ad units (v.1.0.1)
 *   Copyright © 2011 Bishovec Nikolay
 *
 * --------------------------------------------------------
 *
 *   Plugin Page: http://netlanc.net
 *   Contact e-mail: netlanc@yandex.ru
 *
  ---------------------------------------------------------
 */

class PluginAdunits_ActionSettings extends ActionPlugin
{

    protected $sMenuItemSelect = 'adunits';
    protected $oUserCurrent = null;

    public function Init()
    {
	if (($this->oUserCurrent = $this->User_GetUserCurrent() and $this->oUserCurrent->isAdministrator()) or (Config::Get('config.adunits.permit.user') == 'all')) {
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
	$this->AddEventPreg('/^settings$/i', '/^ajaxdeleteadunits$/i', 'AjaxDeleteAdunits');
	$this->AddEventPreg('/^settings$/i', '/^ajaxupdadunits/i', 'AjaxUpdAdunits');
    }

    protected function EventSettings()
    {
	if (!$this->oUserCurrent) {
	    $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));
	    return Router::Action('error');
	}
	$sUserId = $this->oUserCurrent->getId();
	$aAdunits = $this->PluginAdunits_Adunits_GetAdunitsIdByUser($sUserId);

	$this->Viewer_Assign('aAdunits', $aAdunits);

	$this->SetTemplateAction('settings');
    }

    protected function SubmitAdd()
    {
	if (isPost('submit_adunits_add')) {
	    if (!$this->CheckPageFields()) {
		return;
	    }

	    $sSett = getRequest('adunits_setting_viev_1');
	    if (!$this->oUserCurrent->isAdministrator())
		$code = $this->PluginAdunits_Adunits_AdCheckCode();
	    else
		$code = getRequest('adunits_code');

	    $oAdunits = Engine::GetEntity('PluginAdunits_Adunits');
	    $oAdunits->setAdunitsUserId($this->oUserCurrent->getId());
	    $oAdunits->setAdunitsCode($code);
	    $oAdunits->setAdunitsSetting($sSett);
	    $oAdunits->setAdunitsDateAdd(date("Y-m-d H:i:s"));

	    if ($this->PluginAdunits_Adunits_AddAdunits($oAdunits)) {
		$this->Message_AddNotice($this->Lang_Get('adunits_create_submit_add_ok'));
		header('location:/settings/adunits/');
	    } else {
		$_REQUEST['adunits_code'] = getRequest('adunits_code');
		$_REQUEST['adunits_setting_viev_1'] = getRequest('adunits_setting_viev_1');
	    }
	} else {
	    header('location:/settings/adunits/');
	}
    }

    protected function CheckPageFields()
    {
	$this->Security_ValidateSendForm();

	$bOk = true;

	if (!getRequest('adunits_code', null, 'post')) {
	    $this->Message_AddError($this->Lang_Get('adunits_code_error'), $this->Lang_Get('error'));
	    $bOk = false;
	}

	if (!$this->oUserCurrent->isAdministrator() && !$code = $this->PluginAdunits_Adunits_AdCheckCode()) {
	    $this->Message_AddError($this->Lang_Get('adunits_error_no_code'), $this->Lang_Get('error'));
	    $bOk = false;
	}

	return $bOk;
    }

    protected function AjaxDeleteAdunits()
    {

	$this->Viewer_SetResponseAjax('json');

	$sAdunitsId = getRequest('adunitsid', null, 'post');
	if (!($oAdunits = $this->PluginAdunits_Adunits_GetAdunitsId($sAdunitsId))) {
	    $this->Message_AddErrorSingle($this->Lang_Get('system_error'), $this->Lang_Get('error'));
	    return;
	}

	if ($oAdunits->getAdunitsUserId() != $this->oUserCurrent->getId()) {
	    $this->Message_AddErrorSingle($this->Lang_Get('system_error'), $this->Lang_Get('error'));
	    return;
	}

	$this->PluginAdunits_Adunits_DeleteAdunitsId($sAdunitsId);
	$this->Message_AddNoticeSingle($this->Lang_Get('adunits_menu_settings_delete_ok'), $this->Lang_Get('attention'));
    }

    protected function AjaxUpdAdunits()
    {
	$this->Viewer_SetResponseAjax('json');
	if (!($oAdunits = $this->PluginAdunits_Adunits_GetAdunitsId(getRequest('adunits_id')))) {
	    $this->Message_AddErrorSingle($this->Lang_Get('adunits_error_no_id'), $this->Lang_Get('error'));
	    return;
	}
	if ($oAdunits->getAdunitsUserId() != $this->oUserCurrent->getId()) {
	    $this->Message_AddErrorSingle($this->Lang_Get('adunits_error_no_user'), $this->Lang_Get('error'));
	    return;
	}
	if ($this->oUserCurrent->isAdministrator())
	    $code = getRequest('adunits_code');
	else
	    $code = $this->Text_Parser(getRequest('adunits_code'));
	if (!$code) {
	    $this->Message_AddErrorSingle($this->Lang_Get('adunits_error_no_code'), $this->Lang_Get('error'));
	    return;
	} else {
	    $oAdunits->setAdunitsCode($code);
	    $oAdunits->setAdunitsSetting(getRequest('adunits_setting_viev_1', null, 'post'));
	    $oAdunits->setAdunitsDateEdit(date("Y-m-d H:i:s"));
	    if ($this->PluginAdunits_Adunits_UpdAdunits($oAdunits)) {
		$this->Message_AddNoticeSingle($this->Lang_Get('adunits_attention_ok'), $this->Lang_Get('attention'));
	    }
	}
    }

    public function EventShutdown()
    {
	$this->Viewer_Assign('sMenuItemSelect', $this->sMenuItemSelect);
    }

}

?>
