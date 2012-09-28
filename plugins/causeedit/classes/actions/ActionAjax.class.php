<?php

/* -------------------------------------------------------
*
*   LiveStreet (v.1.0)
*   Plugin Cause Edit (v.0.1)
*   Copyright © 2011 Bishovec Nikolay
*
* --------------------------------------------------------
*
*   Plugin Page: http://netlanc.net
*   Contact e-mail: netlanc@yandex.ru
*
---------------------------------------------------------
*/

class PluginCauseedit_ActionAjax extends ActionPlugin
{

    protected $oUserCurrent = null;

    public function Init()
    {
        $this->Viewer_SetResponseAjax('json');
        $this->oUserCurrent = $this->User_GetUserCurrent();
    }

    protected function RegisterEvent()
    {
        $this->AddEventPreg('/^delete$/i', 'EventDelete');
    }

    protected function EventDelete()
    {
        if (!$this->oUserCurrent or !$this->oUserCurrent->isAdministrator()) {
            $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));
            return;
        }
        if (!$oTopic = $this->Topic_GetTopicById(getRequest('iTopicId'))) {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.causeedit.not_topic'), $this->Lang_Get('error'));
            return;
        }
        if (!($aCause = $oTopic->getCauseArray()) or empty($aCause[getRequest('iNum')])) {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.causeedit.not_cause'), $this->Lang_Get('error'));
            return;
        }
        unset($aCause[getRequest('iNum')]);
        $oTopic->setCause(serialize($aCause));
        if ($this->Topic_UpdateTopic($oTopic)) {
            $this->Message_AddNotice($this->Lang_Get('plugin.causeedit.cause_delete_ok'), $this->Lang_Get('attention'));
        } else {
            $this->Message_AddErrorSingle($this->Lang_Get('system_error'), $this->Lang_Get('error'));
            return;
        }

    }

}

?>
