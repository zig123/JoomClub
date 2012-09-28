CREATE TABLE `prefix_userads` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `settings` text character set utf8,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE `prefix_userads` ADD INDEX ( `user_id` );
