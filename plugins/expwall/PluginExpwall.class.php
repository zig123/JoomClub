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

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginExpwall extends Plugin
{


    // Активация плагина
    public function Activate()
    {
        return true;
    }


    public function Deactivate()
    {
        return true;
    }


    // Инициализация плагина
    public function Init()
    {
        $this->Viewer_Assign('sTPWall', rtrim(Plugin::GetTemplatePath('expwall'), '/'));
        $this->Viewer_Assign('sTWWall', rtrim(Plugin::GetTemplateWebPath('expwall'), '/'));
    }
}

?>
