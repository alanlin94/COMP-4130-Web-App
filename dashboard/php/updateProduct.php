<?php
/***KEEP THIS HERE FOR NOW***/
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
        cart_id int(10) NOT NULL,
        product_id int(10) NOT NULL,
        quantity int(10) NOT NULL,
        FOREIGN KEY (cart_id) REFERENCES CART(cart_id),
        FOREIGN KEY (product_id) REFERENCES PRODUCT(product_id),
        PRIMARY KEY (cart_id, product_id)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

      $placeholders = "INSERT INTO PRODUCTS VALUES(1, 'amor_homosexual.jpg', 'amorhomo', 25, 20);
      INSERT INTO PRODUCTS VALUES(2, 'dejected.jpg', 'dejected', 25, 20);
      INSERT INTO PRODUCTS VALUES(3, 'jungle_rain.jpg', 'jungle_rain', 25, 20);
      INSERT INTO PRODUCTS VALUES(4, 'modern_destruction.jpg', 'modern_destruction', 25, 20);
      INSERT INTO PRODUCTS VALUES(5, 'murbella.jpg', 'murbella', 25, 20);
      INSERT INTO PRODUCTS VALUES(6, 'river.jpg', 'river', 25, 20)";

      $this->conn->exec($products);
      $this->conn->exec($users);
      $this->conn->exec($cart);
      $this->conn->exec($cartproduct);
      //$this->conn->exec($placeholders);

    } catch (Exception $e) {
      die("Connection failed: " . $e->getMessage());
    }

  }

  public function getConnection() {
    return $this->conn;
  }
}
/***KEEP THIS HERE FOR NOW END***/

$db = database::getInstance();
$conn = $db->getConnection();
//
$img = "";
$name = "";
$quantity = "";
$price = "";

if (isset($_POST["imgEdit"]) && !empty($_POST["imgEdit"])) {
	$img = $_POST["imgEdit"];
}

if (isset($_POST["nameEdit"]) && !empty($_POST["nameEdit"])) {
	$name = $_POST["nameEdit"];
}

if (isset($_POST["quantityEdit"]) && !empty($_POST["quantityEdit"])) {
	$quantity = $_POST["quantityEdit"];
}

if (isset($_POST["priceEdit"]) && !empty($_POST["priceEdit"])) {
	$price = $_POST["priceEdit"];
}

//echo print_r($_POST["imgEdit"]);

if (is_null($img) || is_null($name) || is_null($quantity) || is_null($price)) {
	echo "One or more fields was not filled out.";
} else {
  $product_id = $_POST["edit_id"];

  $sql = "UPDATE PRODUCTS SET img='$img', name='$name', quantity='$quantity', price='$price' WHERE product_id='$product_id';";
  $conn->exec($sql);
}

echo print_r($_POST);

 ?>
