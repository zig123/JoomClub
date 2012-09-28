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
 * Plugin Autoconnect
 *
 */
class PluginAutoconnect_ModuleACL extends PluginAutoconnect_Inherit_ModuleACL {

	/**
	 * Проверяет можно или нет юзеру постить в данный блог
	 *
	 * @param ModuleBlog_EntityBlog $oBlog	Блог
	 * @param ModuleUser_EntityUser $oUser	Пользователь
	 */
	public function IsAllowBlog($oBlog,$oUser) {
		if ($oUser->isAdministrator()) {
			return true;
		}
		if ($oUser->getRating()<=Config::Get('acl.create.topic.limit_rating')) {
			return false;
		}
		if ($oBlog->getOwnerId()==$oUser->getId()) {
			return true;
		}

		if ($this->ACL_CanAddTopic($oUser,$oBlog) or $oBlogUser->getIsAdministrator() or $oBlogUser->getIsModerator()) {
			return true;
		}
		
		return false;
	}

}
?>