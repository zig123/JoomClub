<?php

/*
	Время задержки анимации
*/
$config['effectinterval'] = 4000; // 4 сек.

/*
	Настройки для списка (scroll)
*/
$config['scroll']['limit'] = 1; // Кол-во блогеров оторажаемых за раз.

/*
	Настройка блоков
*/

$config['blocks'] = array(
	'rating' => array( // название блока
				'show'=>true, // отображать ли?
				'priority'=>300, // приоритет блока
				'limit'=>3, // кол-во выводимых записей
				'type'=>'scroll', // scroll ** 1 - slide FadeIn[Out] |  2 - sroll
				'effectdelay'=>4000, // 4 сек.
				'actions'=>array( // допустимые акшэны
					  'index',
					  'blog',
					  'personal_blog',
					  'feed',
					  'blogs',
					)
				), // В остальных блоках аналогично
	'topic' => array(
				'show'=>true,
				'priority'=>299,
				'limit'=>2,
				'type'=>'slide',
				'effectdelay'=>4000,
				'actions'=>array(
					  'index',
					  'blog',
					  'personal_blog',
					  'feed',
					  'blogs',
					)
				),
	'comment' => array(
				'show'=>true,
				'priority'=>298,
				'limit'=>1,
				'type'=>'slide',
				'effectdelay'=>4000,
				'actions'=>array(
					  'index',
					  'blog',
					  'personal_blog',
					  'feed',
					  'blogs',
					)
				)
);

return $config;
?>