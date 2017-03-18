<?php
/*
  USERS LOGIN, REGISTER, DATABASE
 */
class user {

  function __construct(){
    include_once('build.php');
    $this->db = $conn;
  }

  public function login($username, $password){
    try {
      $sql = 'SELECT * FROM USERS WHERE username = :uName';
      $result = $this->db->prepare($sql);
      $result->execute(array(
        ":uName" => $username
      ));
      $row = $result->fetch();

      if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']){
        $_SESSION['user_id'] = $row['users_id'];
        return true;
      } else {
        return false;
      }

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function loggedin() {
      if (isset($_SESSION['user_id'])) {
          return true;
      } else {
          return false;
      }
  }

  public function adminlogin(){
    try {
      $sql = 'SELECT users_id, user_lvl FROM USERS WHERE users_id = :uId';
      $result = $this->db->prepare($sql);
      $result->execute(array(
        ":uId" => $_SESSION['user_id']
      ));
      $row = $result->fetch();

      if (!empty($row) && $row['user_lvl'] == 2) {
        return true;
      } else {
        return false;
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

}
?>
