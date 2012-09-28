<?php
if (!class_exists('Config')) die('Hacking attempt!');

//экшены
Config::Set('router.page.imperavi', 'PluginImperavi_ActionImperavi');

// языковые настройки редактора
$config['lang'] = 'ru';
//$config['lang'] = 'en';

//пути для загрузки файлов
$config['files_dir'] = '___path.root.server___/uploads/files';

//структура url для файлов
//где random2 - это случ. число от 0 до 99.
//random6 - это случ. число от 0 до 999999.
$config['files_url'] = array('login','year','month','day','random2');

//пути для загрузки картинок
$config['images_dir'] = '___path.root.server___/uploads/images';
//структура url для картинок
$config['images_url'] = array('login','year','month','day','random2');

//максимально допустимые размеры файлов и картинок в кб
$config['max_size'] = 3000; 

//разрешенные типы файлов для загрузки
$config['allow_ext'] = array ('doc','txt', 'rtf', 'ppt', 'pdf', 'jpg', 'png', 'PNG', 'JPG', 'GIF', 'gif');

// на каких страницах производить замену стандартного редактора.
$config['use_for'] = array ('topic', 'talk','question','link','photoset');

return $config;
?>
