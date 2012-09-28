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

$config = array();

$config['table']['adunits'] = '___db.table.prefix___adunits';

Config::Set('router.page.adunits_settings', 'PluginAdunits_ActionSettings');

Config::Set('config.adunits.permit.user', 'all'); // возможность размещать рекламу: all - для всех, admin - только для админов

$a1 = Config::Get('block.rule_index_blog.blocks.right');
$a2 = array('adunits' => array('params' => array('plugin' => 'adunits'), 'priority' => 10));
Config::Set('block.rule_index_blog.blocks.right', array_merge($a1, $a2));

return $config;
?>
