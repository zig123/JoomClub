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

class PluginLikebuttons_HookLikebuttons extends Hook
{

    public function RegisterHook()
    {
        $this->AddHook('template_' . Config::Get('config.likebuttons.hook'), 'ShowButtons');
    }

    public function ShowButtons()
    {
        return $this->Viewer_Fetch(Plugin::GetTemplatePath('likebuttons') . 'likebuttons.tpl');
    }

}

?>
