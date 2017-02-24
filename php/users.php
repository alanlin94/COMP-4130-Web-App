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
