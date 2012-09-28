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
* @File Name: ActionAdmin.class.php
* @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*----------------------------------------------------------------------------
*/

require_once 'AceAdminPlugin.class.php';
//require_once 'ActionAdmin_Root.class.php';

class PluginAceadminpanel_ActionAdmin extends PluginAceadminpanel_Inherit_ActionAdmin
{
    private $sPlugin = 'aceadminpanel';

    public function Init()
    {
        if (($result = parent::Init())) {
            return $result;
        }
    }

}

// EOF
