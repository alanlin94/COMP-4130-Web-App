<?php
/*
    DATABASE CONFIGURATION
 */
class database {
  private $dbname = "Bjorn";
  private $dbhost = "localhost";
  private $dbuser = "root";
  private $dbpassword = "root";
  private $conn;
  private static $_instance;

  public static function getInstance() {
    if (!self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  private function __construct() {
    try {

      $this->conn = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname, $this->dbuser, $this->dbpassword);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if (session_id() == '') {
        session_start();
      }

      $products = "CREATE TABLE IF NOT EXISTS PRODUCTS (
        product_id int(10) NOT NULL auto_increment,
        img varchar(32) collate utf8_unicode_ci NOT NULL,
        name varchar(64) collate utf8_unicode_ci NOT NULL,
        quantity varchar(256) collate utf8_unicode_ci NOT NULL,
        price double NOT NULL default '0',
        PRIMARY KEY  (product_id),
        UNIQUE KEY img (img)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

      $users = "CREATE TABLE IF NOT EXISTS USERS (
        users_id int(10) NOT NULL auto_increment,
        firstname varchar(32) collate utf8_unicode_ci NOT NULL,
        lastname varchar(32) collate utf8_unicode_ci NOT NULL,
        username varchar(32) collate utf8_unicode_ci NOT NULL,
        email varchar(64) collate utf8_unicode_ci NOT NULL,
        password varchar(64) collate utf8_unicode_ci NOT NULL,
        user_lvl int(2) COLLATE utf8_unicode_ci NOT NULL,
        PRIMARY KEY  (users_id)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

      $cart = "CREATE TABLE IF NOT EXISTS CART (
        cart_id int(10) NOT NULL auto_increment,
        name varchar(64) collate utf8_unicode_ci NOT NULL,
        quantity int(6) NOT NULL,
        status varchar(64) collate utf8_unicode_ci NOT NULL,
        PRIMARY KEY  (cart_id)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

      $cartproduct = "CREATE TABLE IF NOT EXISTS CARTPRODUCT (
        cartproduct_id int(10) NOT NULL auto_increment,
        cart_ref int(10) NOT NULL,
        product_ref int(10) NOT NULL,
        quantity int(10) NOT NULL,
        PRIMARY KEY (cartproduct_id),
        FOREIGN KEY (cart_ref) REFERENCES CART(cart_id),
        FOREIGN KEY (product_ref) REFERENCES PRODUCT(product_id)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

      $admin = "INSERT INTO USERS (firstname, lastname, username, email, password, user_lvl)
        SELECT * FROM (SELECT 'John', 'Doe', 'demo', 'admin@bjorn.com', 'admin', 2) AS tmp
        WHERE NOT EXISTS (
            SELECT firstname FROM USERS WHERE firstname = 'John'
        ) LIMIT 1;";

      $this->conn->exec($products);
      $this->conn->exec($users);
      $this->conn->exec($cart);
      $this->conn->exec($cartproduct);
      $this->conn->exec($admin);

    } catch (Exception $e) {
      die("Connection failed: " . $e->getMessage());
    }

  }

  public function getConnection() {
    return $this->conn;
  }
}

$db = database::getInstance();
$conn = $db->getConnection();
?>
