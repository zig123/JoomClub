<?php

/* ========================================================
 *
 *   LiveStreet (0.5x, 1.0)
 *   Copyright © 2012 Zharina Viktor
 *
 * ========================================================
 *
 *   Site: http://viktor.zharina.info
 *   Contact e-mail: viktorz1986@gmail.com
 *
 */

class PluginImperavi_ModuleImage extends Module {

    public function Init() {
    }

    /**
     * Загрузить файл
     * @param type $aFile
     * @return string 
     */
    public function UploadTopicImage($sFullPathSrc, $sDest, $sNameWithoutExt) {

	/*if (!isset($sFilePath)) {
	    return false;
	}*/

    $max_width = Config::Get('view.img_max_width');
    $max_height = Config::Get('view.img_max_height');
    $resize_width = Config::Get('view.img_resize_width');
    $aParams = array('jpg_quality' => 90, 'watermark_use' => false, 'round_corner' => false);

	$sResizedPath = $this->Image_Resize($sFullPathSrc, $sDest, $sNameWithoutExt, $max_width, $max_height, $resize_width, null, false, $aParams, null);

	return $sResizedPath;

    }

}

?>
