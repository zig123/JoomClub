<?php
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI:
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.5.251
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI:
 * @LiveStreet Version: 0.5
 * @File Name: config.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

/*
 * Константа LOCALHOST указывает, что сайт запущен на локальной машине
 */
if (!defined('LOCALHOST')) {
    if (
        ($_SERVER['SERVER_ADDR'] == '127.0.0.1' AND $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
        OR ($_SERVER['SERVER_NAME'] == 'localhost')
        OR (substr($_SERVER['SERVER_NAME'], -10) == '.localhost')
        OR (substr($_SERVER['SERVER_NAME'], -6) == '.local')
        OR (substr($_SERVER['SERVER_NAME'], -4) == '.loc')
    ) {
        define('LOCALHOST', 1);
    }
    else {
        define('LOCALHOST', 0);
    }
}

// EOF