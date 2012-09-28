<?php
/*
  Topicsignature plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

$config = array ();

// Список пользователей для которых разрешена подпись и соответствующий для каждого юзера файл шаблона
// В шаблон дополнительно передается обьект oTopicsUser с данными пользователя, опубликовавшего топик
$config ['Trusted_Users'] = array (
  array ('username' => 'admin', 'tpl_filename' => 'sign_admin'),
);


return $config;

?>