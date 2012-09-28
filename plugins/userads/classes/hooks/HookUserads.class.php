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

class PluginUserads_HookUserads extends Hook
{

    public function RegisterHook()
    {
        if (($oUserCurrent = $this->User_GetUserCurrent() and $oUserCurrent->isAdministrator())) {
            $this->AddHook('template_menu_settings_settings_item', 'MenuSettingsTpl');
        }
        $this->AddHook('init_action', 'InitAction');

        $this->AddHook('check_topic_fields', 'CheckTopicFields');
        $this->AddHook('topic_edit_before', 'TopicEditBefore');

        $this->AddHook('template_form_add_topic_topic_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_question_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_link_end', 'TopicForm');
        $this->AddHook('template_form_add_topic_photoset_end', 'TopicForm');

        $this->AddHook('template_topic_show_userads', 'TopicShowEnd');
    }

    public function InitAction()
    {
        if (Router::GetAction() == 'settings' and Router::GetActionEvent() == 'userads') {
            Router::Action('userads_settings', 'settings');
        }
    }

    public function CheckTopicFields($aVar)
    {
        $_REQUEST['userads'] = getRequest('userads');
        return $aVar;
    }

    public function TopicForm()
    {
        $iTopicId = (int)Router::GetParam(0);
        $aLinks = array();
        $oTopic = $this->Topic_GetTopicById($iTopicId);
        $positions = Config::Get('config.userads.positions');

        if(!empty($oTopic)){
            $aLinks = $oTopic->getLinkArray();
        }
        foreach($positions as $pos){
            $aLinks ["link"][$pos] = !empty($aLinks ["link"][$pos]) ? $aLinks ["link"][$pos] : '';
            $aLinks ["text_img"][$pos] = !empty($aLinks ["text_img"][$pos]) ? ($aLinks ["text_img"][$pos]) : '';
            $aLinks ["is_image"][$pos] = (!empty($aLinks ["is_image"][$pos])) ? 1 : 0;
        }

        $oViewer = $this->Viewer_GetLocalViewer();
        $oViewer->Assign('positions', $positions);
        $oViewer->Assign('aLinks', $aLinks);
        return $oViewer->fetch(Plugin::GetTemplatePath('userads') . 'topic.form_end.tpl');

    }

    public function TopicEditBefore($aVars)
    {
        if (getRequest('userads')) {
            $aLinks = getRequest('userads', array());

            $positions = Config::Get('config.userads.positions');

            foreach($positions as $pos){
                $aLinks ["link"][$pos] = strip_tags(str_replace('http://', '',$aLinks["link"][$pos]));
                $aLinks ["text_img"][$pos] = strip_tags(str_replace('http://', '',$aLinks["text_img"][$pos]));
                $aLinks ["is_image"][$pos] = (!empty($aLinks ["is_image"][$pos])) ? 1 : 0;
            }

            $aVars['oTopic']->setLinks(serialize($aLinks));
        }
        return $aVars;
    }

    public function TopicShowEnd($Vars)
    {
        $oTopic = @$Vars ['topic'];
        $positions = Config::Get('config.userads.positions');
        $position = (!empty($Vars ['position'])) ? $Vars ['position'] : $positions[0];
        //рекламный блок топика
        $aLinks = $oTopic->getLinkArray();
        //если нет рекламных блоков у топика берем их из настроек пользователя
        if(!is_array($aLinks)
            || count($aLinks) == 0
            || empty($aLinks["link"][$position])
            || empty($aLinks["text_img"][$position])
        ){
            $defLinks = $this->PluginUserads_Userads_GetUseradsSettingsByUser($oTopic->getUser()->getId());
            //если рекламные блоки в настройках пользователя не созданы закругляемся, либо присваиваем их текущим блокам
            if(!is_array($defLinks)
                || count($defLinks) == 0
                || empty($defLinks["link"][$position])
                || empty($defLinks["text_img"][$position])
            ){
                return;
            }
            else{
                $aLinks = $defLinks;
            }
        }
        //рейтинг создателя топика
        $userRating = (float)$oTopic->getUser()->_getDataOne('user_rating');
        //минимальный рейтинг
        $minRating =  (float)Config::Get('config.userads.rating');
        //если рейтинга не хватает закругляемся
        if($userRating < $minRating){
            return;
        }
        //массив рекламного блока соответствующего позиции
        $link = array();
        $link["link"] = (!empty($aLinks["link"][$position])) ? $aLinks["link"][$position] : '';
        $link["text_img"] = !empty($aLinks["text_img"][$position]) ? ($aLinks ["text_img"][$position]) : '';
        $link["is_image"] = (!empty($aLinks["is_image"][$position])) ? 1 : 0;
        if(empty($link["link"]) || empty($link["text_img"])){
            return;
        }

        //вывод
        $oViewer = $this->Viewer_GetLocalViewer();
        $oViewer->AppendStyle(Plugin::GetTemplateWebPath('userads') . 'css/style.css');
        $oViewer->Assign('position', $position);
        $oViewer->Assign('link', $link);
        return $oViewer->fetch(Plugin::GetTemplatePath('userads') . 'topic.show_end.tpl');
    }

    public function MenuSettingsTpl()
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath('userads') . 'menu.setting.item.tpl');
    }
}

?>
