<?php
    /*---------------------------------------------------------------------------
    * @Plugin Name: aceAdminPanel
    * @Plugin Id: aceadminpanel
    * @Plugin URI:
    * @Description: Advanced Administrator's Panel for LiveStreet/ACE
    * @Version: 1.5.210
    * @Author: Vadim Shemarov (aka aVadim)
    * @Author URI:
    * @LiveStreet Version: 0.5
    * @File Name: AceAdminPlugin.class.php
    * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
    *----------------------------------------------------------------------------
    */

class PluginAceadminpanel_ActionAdmin_EventBlogs extends PluginAceadminpanel_Inherit_ActionAdmin_EventBlogs
{
    protected function RegisterEvent()
    {
        parent::RegisterEvent();
        $this->AddEvent('blogs', 'EventBlogs');
    }

    public function EventBlogs()
    {
        $this->sMenuSubItemSelect = 'list';
        $sMode = 'all';

        $sCmd = $this->GetParam(0);
        if ($sCmd == 'delete') {
            $this->_blogsDelete();
        } else {
            // * Передан ли номер страницы
            if (preg_match("/^page(\d+)$/i", $this->_getLastParam(), $aMatch)) {
                $iPage = $aMatch[1];
            } else {
                $iPage = 1;
            }
        }

        if ($this->GetParam(1) AND !strstr($this->GetParam(1), 'page')) $sMode = $this->GetParam(1);

        $aParams = array();
        if ($sMode AND $sMode != 'all') $aParams['type'] = $sMode;

        $iCount = 0;
        $aResult = $this->PluginAceadminpanel_Admin_GetBlogList($iCount, $iPage, $this->aConfig['items_per_page'], $aParams);
        $aPaging = $this->Viewer_MakePaging($aResult['count'], $iPage, $this->aConfig['items_per_page'], 4,
            Config::Get('path.root.web') . '/admin/blogs/list' . ($sMode ? '/' . $sMode
                : ''));

        $aBlogTypes = $this->PluginAceadminpanel_Admin_GetBlogTypes();
        foreach ($aBlogTypes as $aRow) {
            $iCount += $aRow['blog_cnt'];
        }

        $this->Viewer_Assign('iBlogsTotal', $iCount);
        $this->Viewer_Assign('aBlogTypes', $aBlogTypes);
        $this->Viewer_Assign('aBlogs', $aResult['collection']);
        $this->Viewer_Assign('sMenuSubItemSelect', $this->sMenuSubItemSelect);
        $this->Viewer_Assign('sMode', $sMode);
        $this->Viewer_Assign('aPaging', $aPaging);

    }

    protected function _blogDelete()
    {
        $bOk = false;
        $iBlogId = $this->GetRequestCheck('blog_id');
        if ($iBlogId AND ($oBlog = $this->Blog_GetBlogById($iBlogId))) {
            $bOk = $this->PluginAceadminpanel_Admin_DelBlog($iBlogId);
        }
        if ($bOk) {
            $this->_messageNotice($this->Lang_Get('adm_action_ok'), 'blog_del');
        } else {
            $this->_messageError($this->Lang_Get('adm_action_err'), 'blog_del');
        }
        $this->GoToBackPage();
    }


}

// EOF