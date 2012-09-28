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
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginAdunits extends Plugin
{

    public function Activate()
    {
	if (!$this->isTableExists('prefix_adunits')) {
	    $this->ExportSQL(dirname(__FILE__) . '/dump.sql');
	}
	return true;
    }

    public function Init()
    {

    }

}

?>
