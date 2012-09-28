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

class PluginAdunits_ModuleAdunits_EntityAdunits extends Entity
{

    public function getAdunitsId()
    {
	return $this->_aData['adunits_id'];
    }

    public function getAdunitsUserId()
    {
	return $this->_aData['user_id'];
    }

    public function getAdunitsCode()
    {
	return $this->_aData['adunits_code'];
    }

    public function getAdunitsSetting()
    {
	return $this->_aData['adunits_setting'];
    }

    public function getAdunitsSettingMore()
    {
	return $this->_aData['adunits_setting_more'];
    }

    public function getAdunitsDateAdd()
    {
	return $this->_aData['adunits_date_add'];
    }

    public function getAdunitsDateEdit()
    {
	return $this->_aData['adunits_date_edit'];
    }

    public function setAdunitsId($data)
    {
	$this->_aData['adunits_id'] = $data;
    }

    public function setAdunitsUserId($data)
    {
	$this->_aData['user_id'] = $data;
    }

    public function setAdunitsCode($data)
    {
	$this->_aData['adunits_code'] = $data;
    }

    public function setAdunitsSetting($data)
    {
	$this->_aData['adunits_setting'] = $data;
    }

    public function setAdunitsSettingMore($data)
    {
	$this->_aData['adunits_setting_more'] = $data;
    }

    public function setAdunitsDateAdd($data)
    {
	$this->_aData['adunits_date_add'] = $data;
    }

    public function setAdunitsDateEdit($data)
    {
	$this->_aData['adunits_date_edit'] = $data;
    }

}

?>
