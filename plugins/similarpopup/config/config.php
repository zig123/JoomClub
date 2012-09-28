<?php
/*
  Similarpopup plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

$config = array ();

// Количество похожих топиков для показа
$config ['Show_Topics_Count'] = 5;      // число

// По какому параметру сортировать записи
// Возможные значения: rating, date
$config ['Order_By'] = 'rating';        // строка

// Как сортировать топики в выдаче
// 0 - по возрастанию,
// 1 - по убыванию
$config ['Order_By_Direction'] = 1;     // число

return $config;

?>