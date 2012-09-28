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

class PluginCauseedit_ModuleTopic_EntityTopic extends PluginPoc_Inherit_ModuleTopic_EntityTopic
{

    /**
     * Гетеры
     */
    public function getCause()
    {
        return $this->getExtraValue('cause');
    }

    public function getCauseArray()
    {
        if ($this->getCause()) {
            return unserialize($this->getCause());
        }
        return false;
    }

    /**
     * Сетеры
     */
    public function setCause($data)
    {
        $this->setExtraValue('cause', $data);
    }


}

?>