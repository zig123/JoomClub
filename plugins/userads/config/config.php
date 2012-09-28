<?php

/* -------------------------------------------------------
*
*   LiveStreet (v.1.0)
*   Plugin User Ads (v.0.1)
*   Copyright © 2012 Arkadiy Sedelnikov
*
* --------------------------------------------------------
*
*   Plugin Page: http://argens.ru
*
* ---------------------------------------------------------
*
*   Created from plugins "Ad units" and "Cause Edit" by Bishovec Nikolay
*
---------------------------------------------------------
*/

$config = array();
//таблица базы данных
Config::Set('db.table.userads', '___db.table.prefix___userads');
//роутер ссылок
Config::Set('router.page.userads_settings', 'PluginUserads_ActionSettings');
//Пороговое значние рейтинга для показа комментариев
Config::Set('config.userads.rating', 0.4);
//Позиции вывода рекламы
Config::Set('config.userads.positions', array('top', 'bottom'));

return $config;
?>
