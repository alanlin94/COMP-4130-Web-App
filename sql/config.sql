CREATE TABLE IF NOT EXISTS `PRODUCTS` (
  `product_id` int(10) NOT NULL auto_increment,
  `img` varchar(32) collate utf8_unicode_ci NOT NULL,
  `name` varchar(64) collate utf8_unicode_ci NOT NULL,
  `quantity` varchar(256) collate utf8_unicode_ci NOT NULL,
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

CREATE TABLE IF NOT EXISTS 'CARTPRODUCT' (
  cart_id int(10) NOT NULL auto_increment,
  product_id int(10) NOT NULL auto_increment,
  quantity int(10) NOT NULL auto_increment,

  FOREIGN KEY(cart_id) REFERENCES CART(id)
  FOREIGN KEY(product_id) REFERENCES PRODUCT(id)
  PRIMARY KEY (cart_id, product_id)
); ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO 'PRODUCTS' VALUES(1, 'amorHomo.jpg', 'amorhomo', 25, 20);
INSERT INTO 'PRODUCTS' VALUES(2, 'dejected.jpg', 'dejected', 25, 20);
INSERT INTO 'PRODUCTS' VALUES(3, 'jungle_rain.jpg', 'jungle_rain', 25, 20);
INSERT INTO 'PRODUCTS' VALUES(4, 'modern_destruction.jpg', 'modern_destruction', 25, 20);
INSERT INTO 'PRODUCTS' VALUES(5, 'murbella.jpg', 'murbella', 25, 20);
INSERT INTO 'PRODUCTS' VALUES(6, 'river.jpg', 'river', 25, 20);
INSERT INTO 'CARTPRODUCT' VALUES(1, 1, 2);

SELECT * FROM CARTPRODUCT WHERE cart_id = 1;

SELECT CARTPRODUCT.cart_id, PRODUCTS.name, CARTPRODUCT.quantity
FROM CARTPRODUCT
INNER JOIN PRODUCT ON CARTPRODUCT.product_id = PRODUCT.id;

SELECT SUM(PRODUCTS.price) * SUM(CARTPRODUCT.quantity)
FROM CARTPRODUCT
INNER JOIN PRODUCT ON CARTPRODUCT.product_id = PRODUCTS.id;
