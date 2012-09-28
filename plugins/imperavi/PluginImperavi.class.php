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
 * ========================================================
 */

/**
 * Запрещаем обращение напрямую через браузер.
 */
if (!class_exists('Plugin')) die('Hacking attempt!');

class PluginImperavi extends Plugin {

	protected $aInherits = array('module' => array('ModuleText'));

	public function Activate() {

		//использовать смайлы
		/*$sToDir = Config::Get('path.root.server').'/uploads/images/smiles/';

		if (!is_dir($sToDir)) {

			$plugin_path = Config::Get('path.root.server').'/plugins/imperavi';

			$sFromDir = $plugin_path.'/images/smiles';
			$this->copy_files_dir_to_dir($sFromDir, $sToDir);

		}*/

		return true;
		
	}
	
	/**
	 * Инициализация плагина
	 */
	public function Init() {

	}

	/*function copy_files_dir_to_dir($src, $dst) {

		//если дирректория не создана (например при первом запуске), то создаем с правами на чтение
		if (!is_dir($dst)) {

			mkdir($dst, 0744, true);

			if (is_dir($src)) {

	    		$files = scandir($src);

	    		foreach ($files as $file)
	    			if ($file != "." && $file != "..") copy($src.'/'.$file, $dst.'/'.$file);

	  		}
		}

	}*/

    public function Deactivate() {		

		return true;

	}
}
?>
