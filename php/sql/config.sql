CREATE TABLE IF NOT EXISTS `PRODUCTS` (
  `product_id` int(10) NOT NULL auto_increment,
  `img` varchar(32) collate utf8_unicode_ci NOT NULL,
  `name` varchar(64) collate utf8_unicode_ci NOT NULL,
  `description` text collate utf8_unicode_ci NOT NULL,
  `price` double NOT NULL default '0',
  PRIMARY KEY  (`product_id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `USERS` (
  `users_id` int(10) NOT NULL auto_increment,
  `username` varchar(32) collate utf8_unicode_ci NOT NULL,
  `email` varchar(64) collate utf8_unicode_ci NOT NULL,
  `password` varchar(64) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`users_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `CART` (
  `cart_id` int(10) NOT NULL auto_increment,
  `username` varchar(64) collate utf8_unicode_ci NOT NULL,
  `status` varchar(64) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--INSERT INTO `PRODUCTS` VALUES(1, 'art.png', 'art', 'Art by Artist', 200);
