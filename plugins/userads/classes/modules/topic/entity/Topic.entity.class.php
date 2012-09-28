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

class PluginUserads_ModuleTopic_EntityTopic extends PluginPoc1_Inherit_ModuleTopic_EntityTopic
{

    /**
     * Гетеры
     */
    public function getLinks()
    {
        return $this->getExtraValue('ads');
    }

    public function getLinkArray()
    {
        if ($this->getLinks()) {
            return unserialize($this->getLinks());
        }
        return false;
    }

    /**
     * Сетеры
     */
    public function setLinks($data)
    {
        $this->setExtraValue('ads', $data);
    }


}

?>