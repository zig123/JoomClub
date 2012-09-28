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

class PluginAdunits_BlockAdunits extends Block
{

    public function Exec()
    {
	if ($sUserId = $this->PluginAdunits_Adunits_InitActionAdunits()) {
	    if ($oAdunits = $this->PluginAdunits_Adunits_GetAdunitsByFilter($sUserId)) {
		if (empty($oAdunits['bl']))
		    $oAdunits = $this->PluginAdunits_Adunits_GetAdunitsByFilter(1);
		if (!empty($oAdunits['bl']))
		    $this->Viewer_Assign('aAdunits', $oAdunits['bl']);
	    }
	}
    }

}

?>
