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
class PluginAutoconnect_ModuleBlog extends PluginAutoconnect_Inherit_ModuleBlog {
	public function GetBlogsAvailable($oUser){
		$blogs=$this->oMapperBlog->GetAvailableBlogs($oUser);
		$blogs=$this->Blog_GetBlogsAdditionalData($blogs);
		return $blogs;
	}

}
?>