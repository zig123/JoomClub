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

if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginLikebuttons extends Plugin
{
    public $aInherits = array(
        //'entity' => array('ModuleTopic_EntityTopic')
    );

	public function Activate()
	{
		return true;
	}

	public function Init()
	{
        $this->Viewer_AppendStyle(Plugin::GetTemplateWebPath('likebuttons') . 'css/style.css');
        $this->Viewer_AppendScript(Plugin::GetTemplateWebPath('likebuttons') . 'js/likebuttons.js');
	}

}

?>
