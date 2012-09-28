<?php

/* -------------------------------------------------------
 *
 *   LiveStreet (0.5x)
 *   Plugin Lite image (v.0.1)
 *   Copyright © 2011 Bishovec Nikolay
 *
 * --------------------------------------------------------
 *
 *   Plugin Page: http://netlanc.net
 *   Contact e-mail: netlanc@yandex.ru
 *
  ---------------------------------------------------------
 */

class PluginLiteimage_ModuleImage_EntityImage extends Entity
{
    /*
     * Гетеры
     */

    public function getId()
    {
	return $this->_aData['id'];
    }

    public function getTopicId()
    {
	return ( isset($this->_aData['topic_id'])) ? $this->_aData['topic_id'] : null;
    }

    public function getUserId()
    {
	return $this->_aData['user_id'];
    }

    public function getTargetTmp()
    {
	return $this->_aData['target_tmp'];
    }

    public function getTargetType()
    {
	return $this->_aData['target_type'];
    }

    public function getTitle()
    {
	return $this->_aData['image_title'];
    }

    public function getDescription()
    {
	return ( isset($this->_aData['description'])) ? $this->_aData['description'] : null;
    }

    public function getTags()
    {
	return $this->_aData['image_tags'];
    }

    public function getPath()
    {
	return isset($this->_aData['path']) ? $this->_aData['path'] : null;
    }

    public function getWebPath($sCrop = null)
    {	
	$sPath = $this->getPath();
	if ($sCrop) {
	    $aExt = explode('.', $sPath);
	    $aExt[count($aExt)-2].= '_preview';
	    $sPath = implode('.', $aExt);
	}
	return $this->Image_GetWebPath($sPath);
    }

    public function getDateAdd()
    {
	return $this->_aData['image_date_add'];
    }
    
    /*
     * Cетеры
     */

    public function setId($data)
    {
	$this->_aData['id'] = $data;
    }

    public function setUserId($data)
    {
	$this->_aData['user_id'] = $data;
    }

    public function setTopicId($data)
    {
	$this->_aData['topic_id'] = $data;
    }

    public function setAudioId($data)
    {
	$this->_aData['audio_id'] = $data;
    }

    public function setTargetTmp($data)
    {
	$this->_aData['target_tmp'] = $data;
    }

    public function setTargetType($data)
    {
	$this->_aData['target_type'] = $data;
    }

    public function setTitle($data)
    {
	$this->_aData['image_title'] = $data;
    }

    public function setDescription($data)
    {
	$this->_aData['image_description'] = $data;
    }

    public function setTags($data)
    {
	$this->_aData['image_tags'] = $data;
    }

    public function setPath($data)
    {
	$this->_aData['path'] = $data;
    }

    public function setDateAdd($data)
    {
	$this->_aData['image_date_add'] = $data;
    }

}

?>
