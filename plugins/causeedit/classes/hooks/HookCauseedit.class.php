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

class PluginCauseedit_HookCauseedit extends Hook
{

    public function RegisterHook()
    {

        $this->AddHook('check_topic_fields', 'CheckTopicFields');
        $this->AddHook('topic_edit_before', 'TopicEditBefore');

        $this->AddHook('template_form_add_topic_topic_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_question_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_link_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_photoset_end', 'TopicForm');

        $this->AddHook('template_topic_show_end', 'TopicShowEnd');
    }

    public function CheckTopicFields($aVar)
    {
        $sActionEvent = Router::GetActionEvent();
        if ($sActionEvent == 'edit') {
            $oUserCurrent = $this->User_GetUserCurrent();
            if (!$oUserCurrent->isAdministrator()) {
                if (!func_check(getRequest('topic_cause_edit', null, 'post'), 'text', 5, 200)) {
                    $this->Message_AddError($this->Lang_Get('plugin.causeedit.cause_edit_error'), $this->Lang_Get('error'));
                    $aVar['bOk'] = false;
                    $_REQUEST['topic_cause_edit'] = getRequest('topic_cause_edit');
                }
                return $aVar;
            }
        }
    }

    public function TopicForm()
    {
        $sActionEvent = Router::GetActionEvent();
        $iTopicId = (int)Router::GetParam(0);
        if ($sActionEvent == 'edit' && $iTopicId) {
            $oTopic = $this->Topic_GetTopicById($iTopicId);
            $aCauses = $oTopic->getCauseArray();
            $_REQUEST['topic_cause_edit'] = '';
            if (isPost('topic_cause_edit')) {
                $_REQUEST['topic_cause_edit'] = getRequest('topic_cause_edit', null, 'POST');
            }
            $oViewer = $this->Viewer_GetLocalViewer();
            $oViewer->Assign('aCauses', $aCauses);
            $oViewer->Assign('iTopicId', $iTopicId);
            $oViewer->Assign('oUserCurrent', $this->User_GetUserCurrent());
            return $oViewer->fetch(Plugin::GetTemplatePath('causeedit') . 'topic.form_end.tpl');
        }
    }

    public function TopicEditBefore($aVars)
    {
        $oTopic = $aVars['oTopic'];
        $oUserCurrent = $this->User_GetUserCurrent();
        if (getRequest('topic_cause_edit')) {
            $aCauses = array();
            if ($oTopic->getCause()) {
                $aCauses = $oTopic->getCauseArray();
            }
            sort($aCauses);
            $aCauses[count($aCauses)] = array(
                'user_id' => $oUserCurrent->getId(),
                'user_login' => $oUserCurrent->getLogin(),
                'text' => $this->Text_Parser(getRequest('topic_cause_edit')),
                'date' => date('Y.F.d H:i:s')
            );
            $aVars['oTopic']->setCause(serialize($aCauses));
        }
        return $aVars;
    }

    public function TopicShowEnd()
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath('causeedit') . 'topic.show_end.tpl');
    }

}

?>
