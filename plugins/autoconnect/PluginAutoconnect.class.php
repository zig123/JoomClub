<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*
*	Plugin Autoconnect
*	Vladimir Yuriev (extravert)
*	contact e-mail: support@lsmods.ru
*
*/

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attemp!');
}

class PluginAutoconnect extends Plugin {

	protected $aInherits=array(
		'module' => array(
            'ModuleBlog','ModuleACL'
        ),
        'mapper'=>array(
            'ModuleBlog_MapperBlog'=>'_ModuleBlog_MapperBlog',
        )
    );

	/**
	 * Plugin Autoconnect activation
	 */
	public function Activate() {
		return true;
	}
	/**
	 * Init plugin Autoconnect
	 */
	public function Init() {
	}
}
?>