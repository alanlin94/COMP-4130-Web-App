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

      $sql = file_get_contents("sql/config.sql");
      $this->conn->exec($sql);

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
